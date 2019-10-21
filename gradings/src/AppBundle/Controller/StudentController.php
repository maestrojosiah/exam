<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;
use AppBundle\Form\StudentType;
use AppBundle\Entity\Graph;
use AppBundle\Entity\Timeline;

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
        $data = [];
        $user = $user = $this->user();
        $configs = $user->getConfigs();
        $config = $configs[0];
        $limit = (int)$config->getChartLimit();
        $student = $this->find('Student', $studentId);
        $relation = 'STUDENT_'.$student->getId();
        $graphs = $this->em()->getRepository('AppBundle:Graph')->findByRelation($relation);
        if($graphs){
            //do nothing
        } else {
            $data['message'] = "No graphs generated for this student.";
        }

        if($request->query->get('n') and $request->query->get('n') == 't') {
            $result = $this->generateGraphAndEntries($student, $user, $limit, $relation);
            return $this->redirectToRoute('graph_index');
        }

        $data['graphs'] = $graphs;
        $data['student'] = $student;

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

    private function generateGraphAndEntries($student, $user, $limit, $relation){

        $count_exam_companies = $this->em()->getRepository('AppBundle:ExamCompany')
            ->findBy(
                    array('user' => $user, 'class' => $student->getClass()),
                    array('id' => 'ASC')
                );
        $grouping = count($count_exam_companies) > 1 ? count($user->getSubjects()) : 0;
        $maximum = 100;

        if(count($count_exam_companies) > $limit){
            $offset = count($count_exam_companies)  - $limit;
        } else {
            $offset = 0;
        }

        $examCompanies = $this->findbyandlimit('ExamCompany', 'user', $user, 'class', $student->getClass(), $limit, $offset);
        $groups_for_graph = "";
        foreach($examCompanies as $key => $examCompany){
            $groups_for_graph .= $key > 0 ? "|".$examCompany->getCTitle() : $examCompany->getCTitle();            
        }

        $scores = $this->findbyand('Score', 'user', $user, 'class', $student->getClass());
        $twenty_random_colors = ['#8928EC', '#FB8B73', '#DBF682', '#8FF6C8', '#10F5A2', '#5AB5A9', '#F1E981', '#A9B9BD', '#D19469', '#B67907', '#7C73D9', '#00ADB7', '#74116B', '#BFDD13', '#9ED559', '#F61595', '#D6F6C2', '#0C019A', '#1A35E7', '#006122',];
        $colors_to_use = array_slice($twenty_random_colors, 0, $limit, true);
        $counted_exams = count($count_exam_companies);

        //declarations
        $graph_title = $student->getNames().": Last $counted_exams Exams Summary";
        $graph_x_title = "Subjects";
        $graph_y_title = "Marks";
        $graph_maximum = $maximum;
        $graph_x_interval = $maximum / 5;
        $graph_grouping = $grouping;
        $graph_label_height = 60;
        $label_angle = 70;
        $group_angle = 0;
        $graph_show_labels = $grouping > 0 ? 'no' : 'yes';
        $graph_relation = "STUDENT_".$student->getId();

        //create graph
        $graph = new Graph();
        $graph->setTitle($graph_title);
        $graph->setXAxisTitle($graph_x_title);
        $graph->setYAxisTitle($graph_y_title);
        $graph->setXInterval($graph_x_interval);
        $graph->setGrouping($graph_grouping);
        $graph->setMaximum($maximum);
        $graph->setXLabelHeight($graph_label_height);
        $graph->setAngle($label_angle);
        $graph->setRelation($graph_relation);
        $graph->setUser($user);
        $graph->setGroupAngle($group_angle);
        $graph->setGraphGroups($groups_for_graph);
        $graph->setShowGroups('yes');
        $graph->setShowLabels($graph_show_labels);
        $this->save($graph);

        $list = [];
        foreach($examCompanies as $key => $examCompany){

            $subject_score = [];
            foreach($user->getSubjects() as $key =>  $subject){
                $this_subject = 0;
                $company = [];
                foreach($scores as $score){
                    if($subject == $score->getSubject() && $score->getExamCompany() == $examCompany && $score->getStudent() == $student){
                        $this_subject = $score->getMarks();
                    }
                }

                $subject_score[$subject->getSTitle()] = $this_subject;

                //declarations
                $timeline_description = $subject->getSTitle();
                $timeline_figure = $this_subject;
                $timeline_color = $colors_to_use[$key];

                //save timeline
                $timeline = new Timeline();
                $timeline->setDescription($timeline_description);
                $timeline->setFigure($timeline_figure);
                $timeline->setColor($timeline_color);
                $timeline->setUser($user);
                $timeline->setGraph($graph);
                $this->save($timeline);

            }

            if(!empty($this_score)){
                $score_lst[] = $this_score;
                $subject_list[] = $subject_score;
            }
            $list[] = $subject_score;

        }

        return $list;
    }

}

