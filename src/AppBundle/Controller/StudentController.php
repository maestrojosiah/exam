<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;
use AppBundle\Form\StudentType;

class StudentController extends Controller
{
    /**
     * @Route("/student/new", name="new_student")
     */
    public function createAction(Request $request)
    {

	   	$data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('AppBundle:Student')
        	->findBy(
        		array('user' => $user),
        		array('id' => 'DESC')
        	);

        $student = new Student();
        $student->setUser($user);

        $form = $this->createForm(StudentType::class, $student);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($student);
            $em->flush();

        	$this->addFlash(
	            'success',
	            'Student created successfully!'
        	);

            if($form->get('saveAndAdd')->isClicked()){
                return $this->redirectToRoute('new_student');
            } else {
                return $this->redirectToRoute('list_students', ['classId' => $student->getClass()->getId()]);
            }

		} 

        $data['students'] = $students;
        $data['user'] = $user;


	    return $this->render('student/create.html.twig',['form' => $form->createView(), 'data' => $data] );
    
    }

    /**
     * @Route("/student/list/{classId}", name="list_students")
     */
    public function listAction(Request $request, $classId)
    {
        $data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $class = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $students = $em->getRepository('AppBundle:Student')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );

        $data['students'] = $students;
        $data['class'] = $class;
        $data['user'] = $user;

        return $this->render('student/list.html.twig', $data );

    }

    /**
     * @Route("/student/profile/{studentId}", name="student_profile")
     */
    public function profileAction(Request $request, $studentId)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $student = $em->getRepository('AppBundle:Student')
            ->find($studentId);

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC'),
                5
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'student' => $student),
                array('id' => 'ASC')
            );

        $exams = [];
        $score_lst = [];
        $list = [];
        $totalScore = [];
        foreach($examCompanies as $examCompany){
            if($examCompany->getClass() == $student->getClass()){
                $exams[] = $examCompany;
            }
            $this_score = [];
            $add = 0;
            foreach($scores as $score){
                if($score->getExamCompany() == $examCompany){
                    $this_score[] = $score;
                    $add += $score->getMarks();
                }
                $list[] = $score->getMarks();
            }
            $totalScore[$examCompany->getId()] = $add;
            if(!empty($this_score)){
                $score_lst[] = $this_score;
            }
            
        }

        $data['student'] = $student;
        $data['exams'] = $exams;
        $data['scores'] = $scores;
        $data['score_lst'] = $score_lst;
        $data['list'] = $list;
        $data['totalScore'] = array_values($totalScore);

        return $this->render('student/profile.html.twig', $data);

    }

    /**
     * @Route("/student/class/choose", name="choose_class")
     */
    public function chooseAction(Request $request)
    {
        $data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $classes = $em->getRepository('AppBundle:Classs')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $data['classes'] = $classes;
        $data['user'] = $user;

        return $this->render('student/choose.html.twig', $data );

    }

    /**
     * @Route("/students/edit/{studentId}", name="edit_student")
     */
    public function editAction(Request $request, $studentId)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('AppBundle:Student')
            ->find($studentId);


        $form = $this->createForm(StudentType::class, $students);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $data['form'] = $form_data;

            $em->persist($form_data);
            $em->flush();

            $this->addFlash(
                'success',
                'Student edited successfully!'
            );

            if($form->get('saveAndAdd')->isClicked()){
                return $this->redirectToRoute('new_student');
            } else {
                return $this->redirectToRoute('list_students', ['classId' => $students->getClass()->getId()]);
            }

        } else {
            $form_data['student_names'] = $students->getNames();
            $form_data['student_class'] = $students->getClass();
            $data['form'] = $form_data;
        }

        $data['student'] = $students;


        return $this->render('student/edit.html.twig', ['form' => $form->createView(), $data,] );

    }

    /**
     * @Route("/students/delete/{studentId}", name="delete_student")
     */
    public function deleteAction(Request $request, $studentId)
    {
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('AppBundle:Student')
            ->find($studentId);

        $em->remove($students);
        $em->flush();

        return $this->redirectToRoute('list_students', ['classId' => $students->getClass()->getId()]);

    }


}
