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

	   	$data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $classes = $em->getRepository('AppBundle:Classs')
        	->findBy(
        		array('user' => $user),
        		array('id' => 'DESC')
        	);

        $class = new Classs();
        $class->setUser($user);

        $form = $this->createForm(ClasssType::class, $class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $form_data = $form->getData();

            $safe_class = trim(str_replace(" ", "", $form_data->getCTitle()));
            $class->setCTitle($safe_class);
            $em->persist($class);
            $em->flush();

        	$this->addFlash(
	            'success',
	            'Classs created successfully!'
        	);

            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_class'
                : 'list_classes';

            return $this->redirectToRoute($nextAction);
		} 

        $data['classes'] = $classes;
        $data['user'] = $user;


	    return $this->render('class/create.html.twig',['form' => $form->createView(), 'data' => $data] );
    
    }

    /**
     * @Route("/class/list", name="list_classes")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $classes = $em->getRepository('AppBundle:Classs')
            ->findBy(
                array('user' => $user),
                array('cTitle' => 'ASC')
            );

        $data['classes'] = $classes;
        $data['user'] = $user;

        return $this->render('class/list.html.twig', $data );

    }


    /**
     * @Route("/class/profile/{classId}", name="class_profile")
     */
    public function profileAction(Request $request, $classId)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $class = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
            ->findBy(
                array('user' => $user),
                array('id' => 'DESC'),
                5
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'DESC')
            );

        $exams = [];
        $score_lst = [];
        $total_score = 0;
        $subject_list = [];
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
                $subject_score[$subject->getSTitle()] = $subject_sum;
                   
            }

            if(!empty($this_score)){
                $score_lst[] = $this_score;
                $subject_list[] = $subject_score;
            }
            
        }

        $data['class'] = $class;
        $data['exams'] = $exams;
        $data['scores'] = $scores;
        $data['score_lst'] = $score_lst;
        $data['total_score'] = $total_score;
        $data['subject_list'] = $subject_list;
        $data['subject_total'] = $subject_total;
        $data['subject_score'] = $subject_score;

        return $this->render('class/profile.html.twig', $data);

    }


    /**
     * @Route("/classs/edit/{classId}", name="edit_class")
     */
    public function editAction(Request $request, $classId)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $classs = $em->getRepository('AppBundle:Classs')
            ->find($classId);


        $form = $this->createForm(ClasssType::class, $classs);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $data['form'] = $form_data;

            $safe_class = trim(str_replace(" ", ".", $form_data->getCTitle()));
            $classs->setCTitle($safe_class);

            $em->persist($classs);
            $em->flush();

            $this->addFlash(
                'success',
                'Classs edited successfully!'
            );

            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'new_class'
                : 'list_classes';

            return $this->redirectToRoute($nextAction);

        } else {
            $form_data['class_number'] = $classs->getCTitle();
            $form_data['class_teacher'] = $classs->getClassTeacher();
            $data['form'] = $form_data;
        }

        $data['class'] = $classs;


        return $this->render('class/edit.html.twig', ['form' => $form->createView(), $data,] );

    }

    /**
     * @Route("/classs/delete/{classId}", name="delete_class")
     */
    public function deleteAction(Request $request, $classId)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $classs = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $em->remove($classs);
        $em->flush();

        return $this->redirectToRoute('list_classes');

    }


}
