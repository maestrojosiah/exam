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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $subjects = $em->getRepository('AppBundle:Subject')
        	->findBy(
        		array('user' => $user),
        		array('id' => 'DESC')
        	);

        $subject = new Subject();
        $subject->setUser($user);

        $form = $this->createForm(SubjectType::class, $subject);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($subject);
            $em->flush();

        	$this->addFlash(
	            'success',
	            'Subject created successfully!'
        	);

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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $subjects = $em->getRepository('AppBundle:Subject')
            ->findBy(
                array('user' => $user),
                array('sTitle' => 'ASC')
            );

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
        $em = $this->getDoctrine()->getManager();

        $subjects = $em->getRepository('AppBundle:Subject')
            ->find($subjectId);


        $form = $this->createForm(SubjectType::class, $subjects);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $data['form'] = $form_data;

            $em->persist($form_data);
            $em->flush();

            $this->addFlash(
                'success',
                'Subject edited successfully!'
            );

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
        $em = $this->getDoctrine()->getManager();

        $subjects = $em->getRepository('AppBundle:Subject')
            ->find($subjectId);

        $em->remove($subjects);
        $em->flush();

        return $this->redirectToRoute('list_subjects');

    }


}
