<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Classs;
use AppBundle\Form\ClasssType;

class ClasssController extends Controller
{
    /**
     * @Route("/class/new", name="new_class")
     */
    public function createAction(Request $request)
    {
	    return $this->render('class/create.html.twig' );

    }

    /**
     * @Route("/class/list", name="list_classes")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $user = $this->user();
        $classes = $this->findby('Classs', 'user', $user);
        $data['classes'] = $classes;
        $data['user'] = $user;
        return $this->render('class/list.html.twig', $data );

    }


    /**
     * @Route("/class/profile/{classId}", name="class_profile")
     */
    public function profileAction(Request $request, $classId)
    {
        $user = $user = $this->user();
        $class = $this->find('Classs', $classId);
        $examCompanies = $this->findandlimit('ExamCompany', 'user', $user, 5, 'ASC');
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );
        $exams = [];
        $score_lst = [];
        $total_score = 0;
        $subject_list = [];
        $list = [];
        $companyTotals = [];
        foreach($examCompanies as $examCompany){
            if($examCompany->getClass() == $class){
                $exams[] = $examCompany;
            }
            $this_score = [];
            foreach($scores as $score){
                if($score->getExamCompany() == $examCompany){
                    $this_score[] = $score;
                    $total_score += $score->getMarks();
                }
            }

            $subject_total = 0;
            $subject_score = [];
            foreach($user->getSubjects() as $subject){
                $this_subject = [];
                $company = [];
                foreach($scores as $score){
                    if($subject == $score->getSubject() && $score->getExamCompany() == $examCompany){
                        $this_subject[] = $score->getMarks();
                        $company[] = $score->getExamCompany()->getCTitle();
                    }
                }
                $subject_sum = ['sum' => array_sum($this_subject), 'company' => $company];
                $list[] = array_sum($this_subject);
                $subject_score[$subject->getSTitle()] = $subject_sum;
                $subject_total += array_sum($this_subject);
                $companyTotals[$examCompany->getId()] = [$subject_total, ($subject_total/count($class->getStudents()))];
            }

            if(!empty($this_score)){
                $score_lst[] = $this_score;
                $subject_list[] = $subject_score;
            }

        }

        $manual_add_to_array = [];
        foreach($companyTotals as $a_total){
            foreach($a_total as $item){
                $manual_add_to_array[$item] = $a_total;
            }
        }

        $data['class'] = $class;
        $data['list'] = $list;
        $data['exams'] = $exams;
        $data['score_lst'] = $score_lst;
        $data['subject_list'] = $subject_list;
        $data['merged'] = array_keys($manual_add_to_array);

        return $this->render('class/profile.html.twig', $data);

    }


    /**
     * @Route("/classs/edit/{classId}", name="edit_class")
     */
    public function editAction(Request $request, $classId)
    {
        $data = [];
        $classs = $this->find('Classs', $classId);
        $data['class'] = $classs;
        return $this->render('class/edit.html.twig', $data );

    }

    /**
     * @Route("/classs/delete/{classId}", name="delete_class")
     */
    public function deleteAction(Request $request, $classId)
    {
        $data = [];

        $classs = $this->find('Classs', $classId);
        $this->delete($classs);
        return $this->redirectToRoute('list_classes');

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
