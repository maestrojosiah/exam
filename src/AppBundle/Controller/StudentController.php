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
        $user = $this->user();
        $class_id = $request->query->get('classId');
        $classs = $this->find('Classs', $class_id);
        $students = $this->findby('Student', 'user', $user);

        $student = new Student();
        $student->setUser($user);
        $student->setClass($classs);
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->save($student);
        	$this->addFlash( 'success', 'Student created successfully!' );
            if($form->get('saveAndAdd')->isClicked()){
                return $this->redirectToRoute('new_student', ['classId' => $class_id ]);
            } else {
                return $this->redirectToRoute('list_students', ['classId' => $student->getClass()->getId()]);
            }

		} 

        $data['students'] = $students;
        $data['user'] = $user;
        $data['class'] = $classs;

	    return $this->render('student/create.html.twig',['form' => $form->createView(), 'data' => $data] );
    }

    /**
     * @Route("/student/list/{classId}", name="list_students")
     */
    public function listAction(Request $request, $classId)
    {
        $data = [];
        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
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
        $user = $this->user();
        $student = $this->find('Student', $studentId);
        $examCompanies = $this->findby('ExamCompany', 'user', $user);
        $scores = $this->findbyand('Score', 'user', $user, 'student', $student);
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
     * @Route("/student/class/choose/{goto}", name="choose_class")
     */
    public function chooseAction(Request $request, $goto)
    {
        $data = [];
        $user = $this->user();
        $classes = $this->findby('Classs', 'user', $user);
        $data['classes'] = $classes;
        $data['user'] = $user;
        $data['goto'] = $goto;
        return $this->render('student/choose.html.twig', $data );
    }

    /**
     * @Route("/students/edit/{studentId}", name="edit_student")
     */
    public function editAction(Request $request, $studentId)
    {
        $data = [];
        $student = $this->find('Student', $studentId);
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $form_data = $form->getData();
            $data['form'] = $form_data;
            $class = $form_data->getClass();
            $class_id = $class->getId();
            $this->save($form_data);
            $this->addFlash( 'success', 'Student edited successfully!');
            if($form->get('saveAndAdd')->isClicked()){
                return $this->redirectToRoute('new_student', ['classId' => $class_id ]);
            } else {
                return $this->redirectToRoute('list_students', ['classId' => $student->getClass()->getId()]);
            }

        } else {
            $form_data['student_names'] = $student->getNames();
            $form_data['student_class'] = $student->getClass();
            $data['form'] = $form_data;
        }

        $data['student'] = $student;

        return $this->render('student/edit.html.twig', ['form' => $form->createView(), $data,] );

    }

    /**
     * @Route("/students/delete/{studentId}", name="delete_student")
     */
    public function deleteAction(Request $request, $studentId)
    {
        $data = [];
        $student = $this->find('Student', $studentId);
        $this->delete($student);
        return $this->redirectToRoute('list_students', ['classId' => $student->getClass()->getId()]);
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
