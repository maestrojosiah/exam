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
      $classes = $this->em()->getRepository('AppBundle:Classs')->findBy(array('user' => $user), array('id' => 'ASC'));
      $students = $this->em()->getRepository('AppBundle:Student')->findBy(array('user' => $user, 'class' => $classs), array('id' => 'ASC'));
      $data['students'] = $students;
      $data['user'] = $user;
      $data['class'] = $classs;
      $data['classes'] = $classes;

	    return $this->render('student/create.html.twig', $data );
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
        $count_exam_companies = $this->em()->getRepository('AppBundle:ExamCompany')
            ->findBy(
                    array('user' => $user, 'class' => $student->getClass()),
                    array('id' => 'ASC')
                );
        if(count($count_exam_companies) > 5){
            $offset = (count($count_exam_companies) + 1)  - 5;
        } else {
            $offset = 0;
        }
        $data['offset'] = $offset;
        $examCompanies = $this->findbyandlimit('ExamCompany', 'user', $user, 'class', $student->getClass(), 5, $offset);
        $scores = $this->findbyand('Score', 'user', $user, 'student', $student);
        $exams = [];
        $score_lst = [];
        $list = [];
        $totalScore = [];
        foreach($examCompanies as $examCompany){
            $exams[] = $examCompany;
            $this_score = [];
            $add = 0;
            foreach($scores as $score){
                if($score->getExamCompany() == $examCompany){
                    $this_score[] = $score;
                    $add += $score->getMarks();
                }
                $list[] = (int)$score->getMarks();
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
        $data['student'] = $student;
        return $this->render('student/edit.html.twig', $data );

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
    
    private function findbyandlimit($entity, $by, $actual, $by2, $actual2, $limit, $offset){
        $entity = $this->em()->getRepository("AppBundle:$entity")
            ->findBy(
                array($by => $actual, $by2 => $actual2),
                array('id' => 'ASC'),
                $limit,
                $offset
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

