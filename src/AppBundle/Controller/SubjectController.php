<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Subject;
use AppBundle\Form\SubjectType;

class SubjectController extends Controller
{
    /**
     * @Route("/subject/new", name="new_subject")
     */
    public function createAction(Request $request)
    {
	   	$data = [];
        $user = $this->user();
        $subjects = $this->findby('Subject', 'user', $user);
        $subject = new Subject();
        $subject->setUser($user);

        $form = $this->createForm(SubjectType::class, $subject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->save($subject);
        	$this->addFlash( 'success', 'Subject created successfully!' );
            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_subject'
                : 'list_subjects';
            return $this->redirectToRoute($nextAction);
		} 

        $data['subjects'] = $subjects;
        $data['user'] = $user;
	    return $this->render('subject/create.html.twig',['form' => $form->createView(), 'data' => $data] );
    }

    /**
     * @Route("/subject/list", name="list_subjects")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $this->user();
        $subjects = $this->findby('Subject', 'user', $user);
        $data['subjects'] = $subjects;
        $data['user'] = $user;
        return $this->render('subject/list.html.twig', $data );
    }

    /**
     * @Route("/subjects/edit/{subjectId}", name="edit_subject")
     */
    public function editAction(Request $request, $subjectId)
    {
        $data = [];
        $subjects = $this->find('Subject', $subjectId);
        $form = $this->createForm(SubjectType::class, $subjects);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $data['form'] = $form_data;
            $this->save($form_data);
            $this->addFlash( 'success', 'Subject edited successfully!' );
            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_subject'
                : 'list_subjects';
            return $this->redirectToRoute($nextAction);
        } else {
            $form_data['subject_number'] = $subjects->getSTitle();
            $data['form'] = $form_data;
        }
        $data['subject'] = $subjects;
        return $this->render('subject/edit.html.twig', ['form' => $form->createView(), $data,] );
    }

    /**
     * @Route("/subjects/delete/{subjectId}", name="delete_subject")
     */
    public function deleteAction(Request $request, $subjectId)
    {
        $data = [];
        $subjects = $this->find('Subject', $subjectId);
        $this->delete($subjects);
        return $this->redirectToRoute('list_subjects');
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
