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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
        	->findBy(
        		array('user' => $user),
        		array('id' => 'DESC')
        	);

        $examCompany = new ExamCompany();
        $examCompany->setUser($user);

        $form = $this->createForm(ExamCompanyType::class, $examCompany);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($examCompany);
            $em->flush();

        	$this->addFlash(
	            'success',
	            'ExamCompany created successfully!'
        	);

            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_examCompany'
                : 'homepage';

            return $this->redirectToRoute($nextAction);
		} 

        $data['examCompanies'] = $examCompanies;
        $data['user'] = $user;


	    return $this->render('examCompany/create.html.twig',['form' => $form->createView(), 'data' => $data] );
    
    }

    /**
     * @Route("/examCompany/list", name="list_examCompanies")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
            ->findBy(
                array('user' => $user),
                array('cTitle' => 'ASC')
            );

        $data['examCompanies'] = $examCompanies;
        $data['user'] = $user;

        return $this->render('examCompany/list.html.twig', $data );

    }

    /**
     * @Route("/examCompanies/edit/{examCompanyId}", name="edit_examCompany")
     */
    public function editAction(Request $request, $examCompanyId)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
            ->find($examCompanyId);


        $form = $this->createForm(ExamCompanyType::class, $examCompanies);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $data['form'] = $form_data;

            $em->persist($form_data);
            $em->flush();

            $this->addFlash(
                'success',
                'ExamCompany edited successfully!'
            );

            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_examCompany'
                : 'list_examCompanies';

            return $this->redirectToRoute($nextAction);

        } else {
            $form_data['exam_company_c_title'] = $examCompanies->getCTitle();
            $form_data['exam_company_class'] = $examCompanies->getClass();
            $data['form'] = $form_data;
        }

        $data['examCompany'] = $examCompanies;


        return $this->render('examCompany/edit.html.twig', ['form' => $form->createView(), $data,] );

    }

    /**
     * @Route("/examCompanies/delete/{examCompanyId}", name="delete_examCompany")
     */
    public function deleteAction(Request $request, $examCompanyId)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
            ->find($examCompanyId);

        $em->remove($examCompanies);
        $em->flush();

        return $this->redirectToRoute('list_examCompanies');

    }


}
