<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ChildSubject;
use AppBundle\Form\ChildSubjectType;

class ChildSubjectController extends Controller
{
    /**
     * @Route("/childSubject/new", name="new_childSubject")
     */
    public function createAction(Request $request)
    {

	   	$data = [];
        $user = $this->user();
        $subject_id = $request->query->get('subjectId');
        $subject = $this->find('Subject', $subject_id);
        $childSubjects = $this->em()->getRepository('AppBundle:ChildSubject')->findBy(array('user' => $user, 'subject' => $subject));
        $data['childSubjects'] = $childSubjects;
        $data['subject'] = $subject;
        $data['user'] = $user;

	    return $this->render('childSubject/create.html.twig', $data );

    }

    /**
     * @Route("/childSubject/list", name="list_childSubjects")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $this->user();
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $data['childSubjects'] = $childSubjects;
        $data['user'] = $user;
        return $this->render('childSubject/list.html.twig', $data );
    }

    /**
     * @Route("/child_subject/class/choose/{goto}", name="choose_class_cs")
     */
    public function chooseAction(Request $request, $goto)
    {
        $data = [];
        $user = $this->user();
        $subjects = $this->findby('Subject', 'user', $user);
        $data['subjects'] = $subjects;
        $data['user'] = $user;
        $data['goto'] = $goto;
        return $this->render('childSubject/choose.html.twig', $data );
    }

    /**
     * @Route("/childSubjects/edit/{childSubjectId}", name="edit_childSubject")
     */
    public function editAction(Request $request, $childSubjectId)
    {
        $data = [];
        $childSubjects = $this->find('childSubject', $childSubjectId);
        $subject_id = $childSubjects->getSubject()->getId();

        $data['childSubject'] = $childSubjects;
        return $this->render('childSubject/edit.html.twig', $data );
    }

    /**
     * @Route("/childSubjects/delete/{childSubjectId}", name="delete_childSubject")
     */
    public function deleteAction(Request $request, $childSubjectId)
    {
        $data = [];
        $childSubject = $this->find('childSubject', $childSubjectId);
        $subject_id = $childSubject->getSubject()->getId();
        $this->delete($childSubject);
        return $this->redirectToRoute('list_childSubjects', ['subjectId' => $subject_id]);

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
