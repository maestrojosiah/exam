<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        $data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $countStudents = $em->getRepository('AppBundle:Student')
        	->countStudents($user);
        $data['countStudents'] = $countStudents;

        $countSubjects = $em->getRepository('AppBundle:Subject')
        	->countSubjects($user);
        $data['countSubjects'] = $countSubjects;

        $countClasses = $em->getRepository('AppBundle:Classs')
            ->countClasses($user);
        $data['countClasses'] = $countClasses;

        $countExams = $em->getRepository('AppBundle:ExamCompany')
            ->countExams($user);
        $data['countExams'] = $countExams;

        $examCompanies = $em->getRepository('AppBundle:ExamCompany')
            ->findBy(
                array('user' => $user),
                array('id' => 'DESC'),
                5
            );

        $scores = $em->getRepository('AppBundle:Score')
            ->findBy(
                array('user' => $user),
                array('subject' => 'ASC')
            );

        $scoreChildren = $em->getRepository('AppBundle:ScoreChild')
            ->findBy(
                array('user' => $user),
                array('subject' => 'ASC')
            );

        $classes = $em->getRepository('AppBundle:Classs')
            ->findBy(
                array('user' => $user),
                array('id' => 'DESC'),
                15
            );


        $data['examCompanies'] = $examCompanies;

        $score_list = [];
        foreach($examCompanies as $examCompany){
        	$company_list = [];
        	foreach($scores as $score){
        		if($score->getExamCompany() == $examCompany){
        			$company_list[] = [$score, $score->getClass(), $examCompany];
        		} else {
                    $company_list[] = [NULL, $examCompany->getClass(), $examCompany];
                }
        	}
        	$score_list[$examCompany->getId()] = $company_list;
        }


        $config = $em->getRepository('AppBundle:Config')
        	->findOneBy(
                array('user' => $user),
                array('id' => 'DESC')
            );

        if(!$config){
            return $this->redirectToRoute('update_config');
        }
        $data['config'] = $config;
        $data['score_list'] = $score_list;
        $data['classes'] = $classes;
        

        return $this->render('default/index.html.twig', $data);
    }
}
