<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Graph;
use AppBundle\Entity\Timeline;
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
      $user = $user = $this->user();
      $classes = $this->findby('Classs', 'user', $user);
      $data['classes'] = $classes;
      $data['user'] = $user;


	    return $this->render('class/create.html.twig', $data );

    }

    /**
     * @Route("/class/list", name="list_classes")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $user = $this->user();
        $classes = $this->findby('Classs', 'user', $user);
        $data['classes'] = $classes;
        $data['user'] = $user;
        return $this->render('class/list.html.twig', $data );

    }


    /**
     * @Route("/class/profile/{classId}", name="class_profile")
     */
    public function profileAction(Request $request, $classId)
    {
        $data = [];
        $user = $user = $this->user();
        $configs = $user->getConfigs();
        $config = $configs[0];
        $limit = (int)$config->getChartLimit();
        $class = $this->find('Classs', $classId);
        $relation = 'CLASS_'.$class->getId()."_".$class->getCTitle();
        $graphs = $this->em()->getRepository('AppBundle:Graph')->findByRelation($relation);
        if($graphs){
            //do nothing
        } else {
            $data['message'] = "No graphs generated for this class.";
        }

        if($request->query->get('n') and $request->query->get('n') == 't') {
            $result = $this->generateGraphAndEntries($class, $user, $limit, $relation);
            return $this->redirectToRoute('graph_index');
        }

        $data['graphs'] = $graphs;
        $data['class'] = $class;

        return $this->render('class/profile.html.twig', $data);

    }


    /**
     * @Route("/classs/edit/{classId}", name="edit_class")
     */
    public function editAction(Request $request, $classId)
    {
        $data = [];
        $classs = $this->find('Classs', $classId);
        $data['class'] = $classs;
        return $this->render('class/edit.html.twig', $data );

    }

    /**
     * @Route("/classs/delete/{classId}", name="delete_class")
     */
    public function deleteAction(Request $request, $classId)
    {
        $data = [];

        $classs = $this->find('Classs', $classId);
        $this->delete($classs);
        return $this->redirectToRoute('list_classes');

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

    private function generateGraphAndEntries($class, $user, $limit, $relation){

        $count_exam_companies = $this->em()->getRepository('AppBundle:ExamCompany')
            ->findBy(
                    array('user' => $user, 'class' => $class),
                    array('id' => 'ASC')
                );
        $grouping = count($count_exam_companies) > 1 ? count($user->getSubjects()) : 0;
        $maximum = count($class->getStudents()) * 100;
        if(count($count_exam_companies) > $limit){
            $offset = count($count_exam_companies)  - $limit;
        } else {
            $offset = 0;
        }

        $examCompanies = $this->findbyandlimit('ExamCompany', 'user', $user, 'class', $class, $limit, $offset);
        $groups_for_graph = "";
        foreach($examCompanies as $key => $examCompany){
            $groups_for_graph .= $key > 0 ? "|".$examCompany->getCTitle() : $examCompany->getCTitle();            
        }
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );
        $twenty_random_colors = ['#8928EC', '#FB8B73', '#DBF682', '#8FF6C8', '#10F5A2', '#5AB5A9', '#F1E981', '#A9B9BD', '#D19469', '#B67907', '#7C73D9', '#00ADB7', '#74116B', '#BFDD13', '#9ED559', '#F61595', '#D6F6C2', '#0C019A', '#1A35E7', '#006122',];
        $colors_to_use = array_slice($twenty_random_colors, 0, $limit, true);
        $counted_exams = count($count_exam_companies);

        //declarations
        $graph_title = "Class ".$class->getCTitle().": Last $counted_exams Exams Summary";
        $graph_x_title = "Subjects";
        $graph_y_title = "Average";
        $graph_maximum = $maximum;
        $graph_x_interval = $maximum / 5;
        $graph_grouping = $grouping;
        $graph_label_height = 60;
        $label_angle = 70;
        $group_angle = 0;
        $graph_show_labels = $grouping > 0 ? 'no' : 'yes';
        $graph_relation = "CLASS_".$class->getId()."_".$class->getCTitle();

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

        $total_score = 0;
        foreach($examCompanies as $key => $examCompany){


            $this_score = [];
            foreach($scores as $score){
                if($score->getExamCompany() == $examCompany){
                    $this_score[] = $score;
                    $total_score += $score->getMarks();
                }
            }

            $subject_total = 0;
            $subject_score = [];
            foreach($user->getSubjects() as $key =>  $subject){
                $this_subject = [];
                $company = [];
                foreach($scores as $score){
                    if($subject == $score->getSubject() && $score->getExamCompany() == $examCompany){
                        $this_subject[] = $score->getMarks();
                        $company[] = $score->getExamCompany()->getCTitle();
                    }
                }
                $subject_sum = ['sum' => array_sum($this_subject), 'company' => $company];
                $list[] = array_sum($this_subject);
                $subject_score[$subject->getSTitle()] = $subject_sum;
                $subject_total += array_sum($this_subject);
                $companyTotals[$examCompany->getId()] = [$subject_total, ($subject_total/count($class->getStudents()))];

                //declarations
                $timeline_description = $subject->getSTitle();
                $timeline_figure = array_sum($this_subject);
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

        }

        $manual_add_to_array = [];
        foreach($companyTotals as $a_total){
            foreach($a_total as $item){
                $manual_add_to_array[$item] = $a_total;
            }
        }

        return $timeline;
    }

}

