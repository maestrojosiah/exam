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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
        	->findBy(
        		array('user' => $user),
        		array('id' => 'DESC')
        	);

        $childSubject = new ChildSubject();
        $childSubject->setUser($user);

        $form = $this->createForm(ChildSubjectType::class, $childSubject);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($childSubject);
            $em->flush();

        	$this->addFlash(
	            'success',
	            'ChildSubject created successfully!'
        	);

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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

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
        $em = $this->getDoctrine()->getManager();

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->find($childSubjectId);


        $form = $this->createForm(ChildSubjectType::class, $childSubjects);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $data['form'] = $form_data;

            $em->persist($form_data);
            $em->flush();

            $this->addFlash(
                'success',
                'ChildSubject edited successfully!'
            );

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
        $em = $this->getDoctrine()->getManager();

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->find($childSubjectId);

        $em->remove($childSubjects);
        $em->flush();

        return $this->redirectToRoute('list_childSubjects');

    }


}
