<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ExamCompany;
use AppBundle\Form\ExamCompanyType;

class ExamCompanyController extends Controller
{
    /**
     * @Route("/examCompany/new", name="new_examCompany")
     */
    public function createAction(Request $request)
    {

	   	$data = [];
        $user = $this->user();
        $examCompanies = $this->findby('ExamCompany', 'user', $user);
        $class_id = $request->query->get('classId');
        $classs = $this->find('Classs', $class_id);
        $data['examCompanies'] = $examCompanies;
        $data['class'] = $classs;
        $data['user'] = $user;

	    return $this->render('examCompany/create.html.twig', $data );

    }

    /**
     * @Route("/examCompany/list", name="list_examCompanies")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $this->user();
        $class_id = $request->query->get('classId');
        $classs = $this->find('Classs', $class_id);
        $examCompanies = $this->findbyand('ExamCompany', 'user', $user, 'class', $classs);
        $data['class'] = $classs;
        $data['examCompanies'] = $examCompanies;
        $data['user'] = $user;
        return $this->render('examCompany/list.html.twig', $data );
    }

    /**
     * @Route("/exam/class/choose/{goto}", name="choose_class_exam")
     */
    public function chooseAction(Request $request, $goto)
    {
        $data = [];
        $user = $this->user();
        $classes = $this->findby('Classs', 'user', $user);
        $data['classes'] = $classes;
        $data['user'] = $user;
        $data['goto'] = $goto;
        return $this->render('examCompany/choose.html.twig', $data );
    }

    /**
     * @Route("/examCompanies/edit/{examCompanyId}", name="edit_examCompany")
     */
    public function editAction(Request $request, $examCompanyId)
    {
        $data = [];
        $examCompany = $this->find('ExamCompany', $examCompanyId);
        $data['examCompany'] = $examCompany;
        return $this->render('examCompany/edit.html.twig', $data );
    }

    /**
     * @Route("/examCompanies/delete/{examCompanyId}", name="delete_examCompany")
     */
    public function deleteAction(Request $request, $examCompanyId)
    {
        $data = [];
        $examCompanies = $this->find('ExamCompany', $examCompanyId);
        $class_id = $request->query->get('classId');
        $this->delete($examCompanies);
        return $this->redirectToRoute('list_examCompanies', ['classId'=> $class_id]);

    }

    private function em(){
        $em = $this->getDoctrine()->getManager();
        return $em;
    }

    private function find($entity, $id){
        $entity = $this->em()->getRepository("AppBundle:$entity")->find($id);
        return $entity;
    }

    private function findby($entity, $by, $actual){
        $query_string = "findBy$by";
        $entity = $this->em()->getRepository("AppBundle:$entity")->$query_string($actual);
        return $entity;
    }

    private function findandlimit($entity, $by, $actual, $limit, $order){
        $entity = $this->em()->getRepository("AppBundle:$entity")
            ->findBy(
                array($by => $actual),
                array('id' => $order),
                $limit
            );
        return $entity;
    }

    private function findbyand($entity, $by, $actual, $by2, $actual2){
        $entity = $this->em()->getRepository("AppBundle:$entity")
            ->findBy(
                array($by => $actual, $by2 => $actual2),
                array('id' => 'ASC')
            );
        return $entity;
    }

    private function save($entity){
        $this->em()->persist($entity);
        $this->em()->flush();
        return true;
    }

    private function delete($entity){
        $this->em()->remove($entity);
        $this->em()->flush();
        return true;
    }

    private function user(){
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $user;
    }

}
