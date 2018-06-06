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
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $childSubject = new ChildSubject();
        $childSubject->setUser($user);

        $form = $this->createForm(ChildSubjectType::class, $childSubject);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->save($childSubject);
        	$this->addFlash('success', 'ChildSubject created successfully!');
            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_childSubject'
                : 'list_childSubjects';
            return $this->redirectToRoute($nextAction);
		} 

        $data['childSubjects'] = $childSubjects;
        $data['user'] = $user;

	    return $this->render('childSubject/create.html.twig',['form' => $form->createView(), 'data' => $data] );
    
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
     * @Route("/childSubjects/edit/{childSubjectId}", name="edit_childSubject")
     */
    public function editAction(Request $request, $childSubjectId)
    {
        $data = [];
        $childSubjects = $this->find('childSubject', $childSubjectId);

        $form = $this->createForm(ChildSubjectType::class, $childSubjects);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $form_data = $form->getData();
            $data['form'] = $form_data;
            $this->save($form_data);
            $this->addFlash('success', 'ChildSubject edited successfully!' );
            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_childSubject'
                : 'list_childSubjects';
            return $this->redirectToRoute($nextAction);

        } else {

            $form_data['child_subject_c_s_title'] = $childSubjects->getCSTitle();
            $form_data['child_subject_subject'] = $childSubjects->getSubject();
            $data['form'] = $form_data;

        }

        $data['childSubject'] = $childSubjects;
        return $this->render('childSubject/edit.html.twig', ['form' => $form->createView(), $data,] );
    }

    /**
     * @Route("/childSubjects/delete/{childSubjectId}", name="delete_childSubject")
     */
    public function deleteAction(Request $request, $childSubjectId)
    {
        $data = [];
        $childSubject = $this->find('childSubject', $childSubjectId);
        $this->delete($childSubject);
        return $this->redirectToRoute('list_childSubjects');

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
