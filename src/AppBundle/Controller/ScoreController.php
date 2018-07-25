<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Score;
use AppBundle\Entity\ScoreChild;
use AppBundle\Form\ScoreType;
use Symfony\Component\HttpFoundation\JsonResponse;

class ScoreController extends Controller
{
    private $enoughTokens = 1;
    /**
     * @Route("/scores/record/{classId}/{companyId}", name="record_scores")
     */
    public function updateAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);

        $score_entries = [];
        foreach($scores as $score){
            $score_entries[$score->getStudent()->getId().'.'.$score->getSubject()->getId().'.'.$class->getId()] = $score->getMarks();
        }

        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        $data['user'] = $user;
        $data['subjects'] = $subjects;
        $data['childSubjects'] = $childSubjects;
        $data['students'] = $students;
        $data['exam'] = $examCompany;
        $data['class'] = $class;
        $data['scores'] = $scores;
        $data['child_score_entries'] = $child_score_entries;
        $data['score_entries'] = $score_entries;

        return $this->render('score/record.html.twig', $data );

    }

    /**
     * @Route("/scores/move", name="move_cursor")
     */
    public function moveAction(Request $request)
    {

        $user = $this->user();
        $id = $request->request->get('id');
        $direction = $request->request->get('direction');
        $parts = explode("_", $id);
        $subjectId = explode("|", $parts[0])[1];
        $studentId = explode("|", $parts[2])[1];
        $move = $this->move($studentId, $subjectId, $direction);
        return new JsonResponse($move);
    }

    /**
     * @Route("/exam/ajax/record", name="record_exam_ajax")
     */
    public function recordAction(Request $request)
    {
        $data = [];

        if(is_numeric($request->request->get('marks'))) {

            $subject_id = $request->request->get('subject_id');
            $student_id = $request->request->get('student_id');
            $examCompanyId = $request->request->get('exam');
            $thisClass = $request->request->get('class');
            $marks = $request->request->get('marks');
            $data['marks'] = $marks;
            $user = $this->get('security.token_storage')->getToken()->getUser();



            $student = $this->em()->getRepository('AppBundle:Student')
                ->find($student_id);

            $examCompany = $this->em()->getRepository('AppBundle:ExamCompany')
                ->find($examCompanyId);

            $class = $this->em()->getRepository('AppBundle:Classs')
                ->find($thisClass);

            $subject = $this->em()->getRepository('AppBundle:Subject')
            ->find($subject_id);

            $isAlreadyRecorded = $this->em()->getRepository('AppBundle:Score')
                ->isAlreadyRecorded($student, $class, $subject, $examCompany);


            if($isAlreadyRecorded){
                $score = $isAlreadyRecorded;
                $message = "[$marks] Edited successfully!";
            } else {
                $score = new Score();
                $message = "[$marks] Created successfully!";
            }

            $score->setMarks($marks);
            $score->setExamCompany($examCompany);
            $score->setClass($class);
            $score->setStudent($student);
            $score->setSubject($subject);
            $score->setUser($user);

            $this->save($score);
        }

        return new JsonResponse($data);
    }

    /**
     * @Route("/scores/save/all", name="save_all_entries")
     */
    public function saveAllAction(Request $request)
    {

        $user = $this->user();
        $list = json_decode($request->request->get('list'));
        $class_id = $request->request->get('class');
        $class = $this->find('Classs', $class_id);
        $exam_id = $request->request->get('exam');
        $exam = $this->find('ExamCompany', $exam_id);

        $test = [];
        foreach($list as $item){
          // get the parts
          $parts = explode("_", $item);
          // get the ids
          $subject_id = explode("|", $parts[0])[1];
          $student_id = explode("|", $parts[2])[1];
          $marks = $parts[5];
          $test[] = $marks;
          $student = $this->find('Student', $student_id);
          // get if subject or child subject
          $subject_string = explode("|", $parts[0])[0];
          if($subject_string == "subject"){
            // subject
            $subject = $this->find('Subject', $subject_id);
            // check if already recorded
            $isAlreadyRecorded = $this->em()->getRepository('AppBundle:Score')
                ->isAlreadyRecorded($student, $class, $subject, $exam);

            if($isAlreadyRecorded){
                $score = $isAlreadyRecorded;
                $message = "[$marks] Edited successfully!";
            } else {
                $score = new Score();
                $message = "[$marks] Created successfully!";
            }
            $score->setMarks($marks);
            $score->setExamCompany($exam);
            $score->setClass($class);
            $score->setStudent($student);
            $score->setSubject($subject);
            $score->setUser($user);

            $this->save($score);

          } else {
            // child subject
            $childSubject = $this->find('ChildSubject', $subject_id);
            // parent
            $parentSubject = $childSubject->getSubject();

            //find other children of same parent
            $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            	->findBy(
            		array('user' => $user, 'student' => $student, 'examCompany' => $exam, 'class' => $class, 'subject' => $parentSubject),
            		array('id' => 'ASC')
            	);

              $children = $parentSubject->getChildSubjects();
              $data['children'] = $children;

              $total_scored = 0;
              $otherScore = 0;

              // add child scores
              foreach($scoreChildren as $scoreChild){
              	if($scoreChild->getChildSubject() != $childSubject){
              		$otherScore += (int)$scoreChild->getMarks();
              	}
              }
              // total when added
              $total_scored = (int)$otherScore + (int)$marks;

              // get total possible out_of
              $total_outof = 0;
              foreach($children as $child){
              	$total_outof += $child->getOutOf();
              }
              // calculate percentage
              $percentage = ($total_scored / $total_outof) * 100;
              // check if score exists
              $isAlreadyRecorded = $this->em()->getRepository('AppBundle:ScoreChild')
                  ->childIsAlreadyRecorded($student, $class, $childSubject, $exam);

              $outOf = $childSubject->getOutOf();
              $data['outof'] = $outOf;
              $data['percentage'] = round($percentage);
              $data['total_scored'] = $total_scored;

              // $uniqueId = '#'.$parentSubject->getId().'_'.$user->getId().'_'.$student->getId().'_'.$exam->getId().'_'.$class->getId();

              // $data['uniqueId'] = $uniqueId;

              if($isAlreadyRecorded){
                  $scoreChild = $isAlreadyRecorded;
                  $message = "[$marks] Edited successfully!";
              } else {
                  $scoreChild = new ScoreChild();
                  $message = "[$marks] Created successfully!";
              }
              // record score_child
              $scoreChild->setMarks($marks);
              $scoreChild->setExamCompany($exam);
              $scoreChild->setClass($class);
              $scoreChild->setStudent($student);
              $scoreChild->setChildSubject($childSubject);
              $scoreChild->setSubject($parentSubject);
              $scoreChild->setUser($user);

              $this->save($scoreChild);
              // check if parent is recorded
              $isAlreadyRecorded = $this->em()->getRepository('AppBundle:Score')
                  ->isAlreadyRecorded($student, $class, $parentSubject, $exam);


              if($isAlreadyRecorded){
                  $score = $isAlreadyRecorded;
                  $message = "[$marks] Edited successfully!";
              } else {
                  $score = new Score();
                  $message = "[$marks] Created successfully!";
              }

              $score->setMarks(round($percentage));
              $score->setExamCompany($exam);
              $score->setClass($class);
              $score->setStudent($student);
              $score->setSubject($parentSubject);
              $score->setUser($user);

              $this->save($score);

          }

        }

        return new JsonResponse($test);
    }

    /**
     * @Route("/scoreChildren/move", name="move_cursor_child")
     */
    public function moveChildAction(Request $request)
    {

        $user = $this->user();
        $id = $request->request->get('id');
        $direction = $request->request->get('direction');
        $parts = explode("_", $id);
        $cSubjectId = explode("|", $parts[0])[1];
        $studentId = explode("|", $parts[2])[1];

        $move = $this->move($studentId, $cSubjectId, $direction);
        return new JsonResponse($move);
    }


    /**
     * @Route("/scores/summary/{classId}/{companyId}", name="record_summary")
     */
    public function summaryAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );
        $existing_download = $this->em()->getRepository('AppBundle:Download')
            ->findOneBy(
                array('exam' => $examCompany),
                array('id' => 'DESC')
            );
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        list($student_list, $sum) = $this->calculateListAndSum($students, $scores);
        $key_list_s = $this->getSubjectKeysAsList($students, $subjects, $scores);
        $key_list_c = $this->getCSubjectKeysAsList($students, $childSubjects, $scoreChildren);
        list($subject_list, $sum_sub) = $this->getSubjectSumAndList($subjects, $scores);
        list($c_subject_list, $c_sum_sub) = $this->getCSubjectSumAndList($childSubjects, $scoreChildren);
        list($data['c_sum_sub'], $data['exam'], $data['key_list_s'], $data['key_list_c'], $data['user'], $data['subjects'])  = [$this->rank_sub_child($c_sum_sub), $examCompany, $key_list_s, $key_list_c, $user, $subjects];
        list($data['students'], $data['class'], $data['scores'], $data['childSubjects'], $data['student_list'])  = [$students, $class, $scores, $childSubjects, $student_list];
        list($data['subject_list'], $data['c_subject_list'], $data['child_score_entries'], $data['sum'], $data['sum_sub'], $data['download'])   = [$subject_list, $c_subject_list, $child_score_entries, $this->rank($sum), $this->rank_sub($sum_sub), $existing_download ];

        return $this->render('score/summary.html.twig', $data);

    }

    /**
     * @Route("/scores/empty/{classId}/{companyId}", name="empty_print")
     */
    public function emptyAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $data['examCompany'] = $examCompany;
        $data['childSubjects'] = $childSubjects;
        $data['subjects'] = $subjects;
        $data['students'] = $students;
        $data['class'] = $class;
        return $this->render('score/empty.html.twig', $data);

    }

    /**
     * @Route("/scores/empty_pdf/{classId}/{companyId}", name="pdf_empty_print")
     */
    public function emptyPdfAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $data['childSubjects'] = $childSubjects;
        $data['examCompany'] = $examCompany;
        $data['subjects'] = $subjects;
        $data['students'] = $students;
        $data['class'] = $class;

        $html = $this->renderView('pdf/empty.html.twig', $data);

        $filename = sprintf("empty-%s.pdf", date('Ymd~his'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('orientation'=>'Portrait')),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );

    }

    /**
     * @Route("/scores/reports/{classId}/{companyId}", name="report_forms")
     */
    public function reportAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        list($student_list, $sum) = $this->calculateListAndSum($students, $scores);
        $key_list_s = $this->getSubjectKeysAsList($students, $subjects, $scores);
        $key_list_c = $this->getCSubjectKeysAsList($students, $childSubjects, $scoreChildren);
        list($subject_list, $sum_sub) = $this->getSubjectSumAndList($subjects, $scores);
        list($c_subject_list, $c_sum_sub) = $this->getCSubjectSumAndList($childSubjects, $scoreChildren);
        list($data['c_sum_sub'], $data['exam'], $data['key_list_s'], $data['key_list_c'], $data['user'], $data['subjects'])  = [$this->rank_sub_child($c_sum_sub), $examCompany, $key_list_s, $key_list_c, $user, $subjects];
        list($data['students'], $data['class'], $data['scores'], $data['childSubjects'], $data['student_list'])  = [$students, $class, $scores, $childSubjects, $student_list];
        list($data['subject_list'], $data['c_subject_list'], $data['child_score_entries'], $data['sum'], $data['sum_sub'])   = [$subject_list, $c_subject_list, $child_score_entries, $this->rank($sum), $this->rank_sub($sum_sub)];

        return $this->render('score/report.html.twig', $data);

    }

    /**
     * @Route("/scores/download/somefancyname/{classId}/{companyId}", name="download_exam")
     */
    public function downloadAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $class_name = $class->getCTitle();
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        list($student_list, $sum) = $this->calculateListAndSum($students, $scores);
        $key_list_s = $this->getSubjectKeysAsList($students, $subjects, $scores);
        $key_list_c = $this->getCSubjectKeysAsList($students, $childSubjects, $scoreChildren);
        list($subject_list, $sum_sub) = $this->getSubjectSumAndList($subjects, $scores);
        list($c_subject_list, $c_sum_sub) = $this->getCSubjectSumAndList($childSubjects, $scoreChildren);
        list($data['c_sum_sub'], $data['exam'], $data['key_list_s'], $data['key_list_c'], $data['user'], $data['subjects'])  = [$this->rank_sub_child($c_sum_sub), $examCompany, $key_list_s, $key_list_c, $user, $subjects];
        list($data['students'], $data['class'], $data['scores'], $data['childSubjects'], $data['student_list'])  = [$students, $class, $scores, $childSubjects, $student_list];
        list($data['subject_list'], $data['c_subject_list'], $data['child_score_entries'], $data['sum'], $data['sum_sub'])   = [$subject_list, $c_subject_list, $child_score_entries, $this->rank($sum), $this->rank_sub($sum_sub)];
        // return $this->render('pdf/pdf.html.twig', $data);
        $html = $this->renderView('pdf/pdf.html.twig', $data);

        $filename = sprintf("exam-$class_name-%s.pdf", date('Ymd~his'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('orientation'=>'Portrait')),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }

    /**
     * @Route("/report/download/somefancyname/{classId}/{companyId}", name="download_report")
     */
    public function repotAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $class_name = $class->getCTitle();
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        list($student_list, $sum) = $this->calculateListAndSum($students, $scores);
        $key_list_s = $this->getSubjectKeysAsList($students, $subjects, $scores);
        $key_list_c = $this->getCSubjectKeysAsList($students, $childSubjects, $scoreChildren);
        list($subject_list, $sum_sub) = $this->getSubjectSumAndList($subjects, $scores);
        list($c_subject_list, $c_sum_sub) = $this->getCSubjectSumAndList($childSubjects, $scoreChildren);
        list($data['c_sum_sub'], $data['exam'], $data['key_list_s'], $data['key_list_c'], $data['user'], $data['subjects'])  = [$this->rank_sub_child($c_sum_sub), $examCompany, $key_list_s, $key_list_c, $user, $subjects];
        list($data['students'], $data['class'], $data['scores'], $data['childSubjects'], $data['student_list'])  = [$students, $class, $scores, $childSubjects, $student_list];
        list($data['subject_list'], $data['c_subject_list'], $data['child_score_entries'], $data['sum'], $data['sum_sub'])   = [$subject_list, $c_subject_list, $child_score_entries, $this->rank($sum), $this->rank_sub($sum_sub)];

        // return $this->render('pdf/report.html.twig', $data);

        $html = $this->renderView('pdf/report.html.twig', $data);

        $filename = sprintf("report-$class_name-%s.pdf", date('Ymd~his'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('orientation'=>'Landscape')),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }

    /**
     * @Route("/scores/image/{classId}/{companyId}", name="download_exam_img")
     */
    public function downloadImgAction(Request $request, $classId, $companyId)
    {

        $user = $this->user();
        $class = $this->find('Classs', $classId);
        $class_name = $class->getCTitle();
        $examCompany = $this->find('ExamCompany', $companyId);
        $subjects = $this->findby('Subject', 'user', $user);
        $scores = $this->em()->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );
        $students = $this->findbyand('Student', 'user', $user, 'class', $class);
        $childSubjects = $this->findby('ChildSubject', 'user', $user);
        $scoreChildren = $this->em()->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        list($student_list, $sum) = $this->calculateListAndSum($students, $scores);
        $key_list_s = $this->getSubjectKeysAsList($students, $subjects, $scores);
        $key_list_c = $this->getCSubjectKeysAsList($students, $childSubjects, $scoreChildren);
        list($subject_list, $sum_sub) = $this->getSubjectSumAndList($subjects, $scores);
        list($c_subject_list, $c_sum_sub) = $this->getCSubjectSumAndList($childSubjects, $scoreChildren);
        list($data['c_sum_sub'], $data['exam'], $data['key_list_s'], $data['key_list_c'], $data['user'], $data['subjects'])  = [$this->rank_sub_child($c_sum_sub), $examCompany, $key_list_s, $key_list_c, $user, $subjects];
        list($data['students'], $data['class'], $data['scores'], $data['childSubjects'], $data['student_list'])  = [$students, $class, $scores, $childSubjects, $student_list];
        list($data['subject_list'], $data['c_subject_list'], $data['child_score_entries'], $data['sum'], $data['sum_sub'])   = [$subject_list, $c_subject_list, $child_score_entries, $this->rank($sum), $this->rank_sub($sum_sub)];

        $html = $this->renderView('pdf/image.html.twig', $data);

        $filename = sprintf("exam_img-$class_name-%s.jpg", date('Ymd~his'));

        return new Response(
            $this->get('knp_snappy.image')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'image/jpeg',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }

    public function rank ($arr) {
        arsort($arr);
        $ret = array();
        $s = array();
        $i = 0;
        foreach ($arr as $k=>$v) {

            $stude = $this->em()->getRepository('AppBundle:Student')
                ->find($k);
            if (!isset($s[$v])) { $s[$v] = ++$i; } else { ++$i; }
            $ret[$k]= array($v, $s[$v], $stude);
        }
        return $ret;
    }

    public function rank_sub ($arr) {
        arsort($arr);
        $ret = array();
        $s = array();
        $i = 0;
        foreach ($arr as $k=>$v) {

            $stude = $this->em()->getRepository('AppBundle:Subject')
                ->find($k);
            if (!isset($s[$v])) { $s[$v] = ++$i; } else { ++$i; }
            $ret[$k]= array($v, $s[$v], $stude);
        }
        return $ret;
    }

    public function rank_sub_child ($arr) {
        arsort($arr);
        $ret = array();
        $s = array();
        $i = 0;
        foreach ($arr as $k=>$v) {

            $stude = $this->em()->getRepository('AppBundle:ChildSubject')
                ->find($k);
            if (!isset($s[$v])) { $s[$v] = ++$i; } else { ++$i; }
            $ret[$k]= array($v, $s[$v], $stude);
        }
        return $ret;
    }

    private function move($studentId, $cSubjectId, $direction){
        $move = "";
        $prev_student = $this->em()->getRepository('AppBundle:Student')->getPreviousStudent($studentId);
        $next_student = $this->em()->getRepository('AppBundle:Student')->getNextStudent($studentId);
        $prev_subject = $this->em()->getRepository('AppBundle:ChildSubject')->getPreviousCSubject($cSubjectId);
        $next_subject = $this->em()->getRepository('AppBundle:ChildSubject')->getNextCSubject($cSubjectId);

        if($direction == "down"){
            $move = $next_student->getId()."_".$cSubjectId;
        } elseif ($direction == "up") {
            $move = $prev_student->getId()."_".$cSubjectId;
        } elseif ($direction == "left") {
            $move = $studentId."_".$prev_subject->getId();
        } elseif ($direction == "right") {
            $move = $studentId."_".$next_subject->getId();
        }
        return $move;
    }

    private function calculateListAndSum($students, $scores){
        $sum = [];
        $student_list = [];
        $user = $this->user();
        foreach($students as $student){
            $all_subjects_for_this_student = [];
            $all_subjects_for_this_student_total = [];
            foreach($scores as $score){
                if($score->getStudent() == $student){
                    $all_subjects_for_this_student[] = $score;
                    $all_subjects_for_this_student_total[] = $score->getMarks();
                }
            }
            $sum[$student->getId()] = array_sum($all_subjects_for_this_student_total);
            $student_list[$student->getId()] = $all_subjects_for_this_student;
        }
        return [$student_list, $sum];
    }

    private function getSubjectKeysAsList($students, $subjects, $scores){
        $key_list_s  = [];
        foreach($students as $student){
            foreach($subjects as $subject){
                $for_s_subject = [];
                foreach($scores as $score){
                    if($score->getStudent() == $student && $score->getSubject() == $subject){
                        $for_s_subject[$student->getId().".".$subject->getId()."."."s"] = $score;
                    } else {
                        $for_s_subject[] = 0;
                    }
                }
                $key_list_s[$student->getId().".".$subject->getId()."."."s"] = $for_s_subject;
            }
        }
        return $key_list_s;
    }

    private function getCSubjectKeysAsList($students, $childSubjects, $scoreChildren){
        $key_list_c  = [];
        foreach($students as $student){
            foreach($childSubjects as $childSubject){
                $for_c_subject = [];
                foreach($scoreChildren as $c_score){
                    if($c_score->getStudent() == $student && $c_score->getChildSubject() == $childSubject){
                        $for_c_subject[$student->getId().".".$childSubject->getId()."."."c"] = $c_score;
                    } else {
                        $for_c_subject[] = 0;
                    }
                }

                $key_list_c[$student->getId().".".$childSubject->getId()."."."c"] = $for_c_subject;

            }
        }
        return $key_list_c;
    }

    private function getSubjectSumAndList($subjects, $scores){
        $subject_list = [];
        $sum_sub = [];
        foreach($subjects as $subject){
            $all_scores_for_this_subject = [];
            $all_scores_for_this_subject_total = [];
            foreach($scores as $score){
                if($score->getSubject() == $subject){
                    $all_scores_for_this_subject[$subject->getId().".".$score->getStudent()->getId()] = $score;
                    $all_scores_for_this_subject_total[] = $score->getMarks();
                }
            }
            $sum_sub[$subject->getId()] = array_sum($all_scores_for_this_subject_total);
            $subject_list[$subject->getId()] = $all_scores_for_this_subject;
        }
        return [$subject_list, $sum_sub];
    }

    private function getCSubjectSumAndList($childSubjects, $scoreChildren){
        $c_subject_list = [];
        $c_sum_sub = [];
        foreach($childSubjects as $c_subject){
            $all_scores_for_this_c_subject = [];
            $all_scores_for_this_c_subject_total = [];
            foreach($scoreChildren as $score){
                if($score->getChildSubject() == $c_subject){
                    $all_scores_for_this_c_subject[] = $score;
                    $all_scores_for_this_c_subject_total[] = $score->getMarks();
                }
            }
            $c_sum_sub[$c_subject->getId()] = array_sum($all_scores_for_this_c_subject_total);
            $c_subject_list[$c_subject->getId()] = $all_scores_for_this_c_subject;
        }
        return [$c_subject_list, $c_sum_sub];
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
