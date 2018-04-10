<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Score;
use AppBundle\Form\ScoreType;
use Symfony\Component\HttpFoundation\JsonResponse;

class ScoreController extends Controller
{
    /**
     * @Route("/scores/record/{classId}/{companyId}", name="record_scores")
     */
    public function updateAction(Request $request, $classId, $companyId)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $class = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $examCompany = $em->getRepository('AppBundle:examCompany')
            ->find($companyId);

        $subjects = $em->getRepository('AppBundle:Subject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );

        $scoreChildren = $em->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
            

        $students = $em->getRepository('AppBundle:Student')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );


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
     * @Route("/scores/summary/{classId}/{companyId}", name="record_summary")
     */
    public function summaryAction(Request $request, $classId, $companyId)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $class = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $examCompany = $em->getRepository('AppBundle:examCompany')
            ->find($companyId);

        $subjects = $em->getRepository('AppBundle:Subject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );


        $students = $em->getRepository('AppBundle:Student')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scoreChildren = $em->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
            

        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        $student_list = [];
        $sum = [];
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

        $key_list_s  = [];
        $key_list_c  = [];
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


        $data['exam'] = $examCompany;
        $data['key_list_s'] = $key_list_s;
        $data['key_list_c'] = $key_list_c;
        $data['user'] = $user;
        $data['subjects'] = $subjects;
        $data['students'] = $students;
        $data['class'] = $class;
        $data['scores'] = $scores;
        $data['childSubjects'] = $childSubjects;
        $data['student_list'] = $student_list;
        $data['subject_list'] = $subject_list;
        $data['c_subject_list'] = $c_subject_list;
        $data['child_score_entries'] = $child_score_entries;
        $data['sum'] = $this->rank($sum);
        $data['sum_sub'] = $this->rank_sub($sum_sub);
        $data['c_sum_sub'] = $this->rank_sub_child($c_sum_sub);

        return $this->render('score/summary.html.twig', $data);
    
    }

    /**
     * @Route("/scores/download/{classId}/{companyId}", name="download_exam")
     */
    public function downloadAction(Request $request, $classId, $companyId)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $class = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $examCompany = $em->getRepository('AppBundle:examCompany')
            ->find($companyId);

        $subjects = $em->getRepository('AppBundle:Subject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );


        $students = $em->getRepository('AppBundle:Student')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scoreChildren = $em->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
            

        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        $student_list = [];
        $sum = [];
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

        $key_list_s  = [];
        $key_list_c  = [];
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


        $data['exam'] = $examCompany;
        $data['key_list_s'] = $key_list_s;
        $data['key_list_c'] = $key_list_c;
        $data['user'] = $user;
        $data['subjects'] = $subjects;
        $data['students'] = $students;
        $data['class'] = $class;
        $data['scores'] = $scores;
        $data['childSubjects'] = $childSubjects;
        $data['student_list'] = $student_list;
        $data['subject_list'] = $subject_list;
        $data['c_subject_list'] = $c_subject_list;
        $data['child_score_entries'] = $child_score_entries;
        $data['sum'] = $this->rank($sum);
        $data['sum_sub'] = $this->rank_sub($sum_sub);
        $data['c_sum_sub'] = $this->rank_sub_child($c_sum_sub);

        $html = $this->renderView('pdf/pdf.html.twig', $data);

        $filename = sprintf("exam-%s.pdf", date('Ymd~his'));

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
     * @Route("/scores/image/{classId}/{companyId}", name="download_exam_img")
     */
    public function downloadImgAction(Request $request, $classId, $companyId)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $class = $em->getRepository('AppBundle:Classs')
            ->find($classId);

        $examCompany = $em->getRepository('AppBundle:examCompany')
            ->find($companyId);

        $subjects = $em->getRepository('AppBundle:Subject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('subject' => 'ASC')
            );


        $students = $em->getRepository('AppBundle:Student')
            ->findBy(
                array('user' => $user, 'class' => $class),
                array('id' => 'ASC')
            );

        $childSubjects = $em->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $scoreChildren = $em->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user, 'class' => $class, 'examCompany' => $examCompany),
                array('id' => 'ASC')
            );
            

        $child_score_entries = [];
        foreach($scoreChildren as $scoreChild){
            $child_score_entries[$scoreChild->getStudent()->getId().'.'.$scoreChild->getChildSubject()->getId().'.'.$class->getId()] = $scoreChild->getMarks();
        }

        $student_list = [];
        $sum = [];
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

        $key_list_s  = [];
        $key_list_c  = [];
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


        $data['exam'] = $examCompany;
        $data['key_list_s'] = $key_list_s;
        $data['key_list_c'] = $key_list_c;
        $data['user'] = $user;
        $data['subjects'] = $subjects;
        $data['students'] = $students;
        $data['class'] = $class;
        $data['scores'] = $scores;
        $data['childSubjects'] = $childSubjects;
        $data['student_list'] = $student_list;
        $data['subject_list'] = $subject_list;
        $data['c_subject_list'] = $c_subject_list;
        $data['child_score_entries'] = $child_score_entries;
        $data['sum'] = $this->rank($sum);
        $data['sum_sub'] = $this->rank_sub($sum_sub);
        $data['c_sum_sub'] = $this->rank_sub_child($c_sum_sub);

        $html = $this->renderView('pdf/image.html.twig', $data);

        $filename = sprintf("exam-%s.jpg", date('Ymd~his'));

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
            $em = $this->getDoctrine()->getManager();
            $stude = $em->getRepository('AppBundle:Student')
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
            $em = $this->getDoctrine()->getManager();
            $stude = $em->getRepository('AppBundle:Subject')
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
            $em = $this->getDoctrine()->getManager();
            $stude = $em->getRepository('AppBundle:ChildSubject')
                ->find($k);
            if (!isset($s[$v])) { $s[$v] = ++$i; } else { ++$i; }
            $ret[$k]= array($v, $s[$v], $stude);
        }
        return $ret;
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
            $user = $this->get('security.token_storage')->getToken()->getUser();
          
            $em = $this->getDoctrine()->getManager();

            $student = $em->getRepository('AppBundle:Student')
                ->find($student_id);

            $examCompany = $em->getRepository('AppBundle:ExamCompany')
                ->find($examCompanyId);

            $class = $em->getRepository('AppBundle:Classs')
                ->find($thisClass);

            $subject = $em->getRepository('AppBundle:Subject')
            ->find($subject_id);

            $isAlreadyRecorded = $em->getRepository('AppBundle:Score')
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

            $em->persist($score);
            $em->flush();

        }

        return new JsonResponse($data);
    } 


}
