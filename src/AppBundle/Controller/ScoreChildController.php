<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ScoreChild;
use AppBundle\Entity\Score;
use AppBundle\Form\ScoreChildType;
use Symfony\Component\HttpFoundation\JsonResponse;

class ScoreChildController extends Controller
{

    /**
     * @Route("/exam/ajax/record/child", name="record_exam_ajax_child")
     */
    public function recordChildAction(Request $request)
    {
        $data = [];

        if(is_numeric($request->request->get('marks'))) {

            $subject_id = $request->request->get('c_subject_id');
            $student_id = $request->request->get('student_id');
            $examCompanyId = $request->request->get('exam');
            $thisClass = $request->request->get('class');
            $marks = $request->request->get('marks');
            $data['marks'] = $marks;
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();

            $student = $em->getRepository('AppBundle:Student')
                ->find($student_id);

            $examCompany = $em->getRepository('AppBundle:ExamCompany')
                ->find($examCompanyId);

            $class = $em->getRepository('AppBundle:Classs')
                ->find($thisClass);

            $childSubject = $em->getRepository('AppBundle:ChildSubject')
            ->find($subject_id);

            $parentSubject = $childSubject->getSubject();

            $scoreChildren = $em->getRepository('AppBundle:ScoreChild')
            	->findBy(
            		array('user' => $user, 'student' => $student, 'examCompany' => $examCompany, 'class' => $class, 'subject' => $parentSubject),
            		array('id' => 'ASC')
            	);

            $children = $parentSubject->getChildSubjects();
            $data['children'] = $children;

            $total_scored = 0;
            $otherScore = 0;

            foreach($scoreChildren as $scoreChild){
            	if($scoreChild->getChildSubject() != $childSubject){
            		$otherScore += $scoreChild->getMarks();
            	}
            }
            $total_scored = $otherScore + $marks;

            $total_outof = 0;
            foreach($children as $child){
            	$total_outof += $child->getOutOf();
            }

            $percentage = ($total_scored / $total_outof) * 100;

            $isAlreadyRecorded = $em->getRepository('AppBundle:ScoreChild')
                ->childIsAlreadyRecorded($student, $class, $childSubject, $examCompany);

            $outOf = $childSubject->getOutOf();
            $data['outof'] = $outOf;
            $data['percentage'] = round($percentage);
            $data['total_scored'] = $total_scored;

            $uniqueId = '#'.$parentSubject->getId().'_'.$user->getId().'_'.$student->getId().'_'.$examCompany->getId().'_'.$class->getId();

            $data['uniqueId'] = $uniqueId;

            if($isAlreadyRecorded){
                $scoreChild = $isAlreadyRecorded;
                $message = "[$marks] Edited successfully!";
            } else {
                $scoreChild = new ScoreChild();
                $message = "[$marks] Created successfully!";
            }

            $scoreChild->setMarks($marks);
            $scoreChild->setExamCompany($examCompany);
            $scoreChild->setClass($class);
            $scoreChild->setStudent($student);
            $scoreChild->setChildSubject($childSubject);
            $scoreChild->setSubject($parentSubject);
            $scoreChild->setUser($user);

            $em->persist($scoreChild);
            $em->flush();

            $isAlreadyRecorded = $em->getRepository('AppBundle:Score')
                ->isAlreadyRecorded($student, $class, $parentSubject, $examCompany);


            if($isAlreadyRecorded){
                $score = $isAlreadyRecorded;
                $message = "[$marks] Edited successfully!";
            } else {
                $score = new Score();
                $message = "[$marks] Created successfully!";
            }

            $score->setMarks(round($percentage));
            $score->setExamCompany($examCompany);
            $score->setClass($class);
            $score->setStudent($student);
            $score->setSubject($parentSubject);
            $score->setUser($user);

            $em->persist($score);
            $em->flush();

        }

        return new JsonResponse($data);
    }


}
