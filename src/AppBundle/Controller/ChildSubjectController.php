<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ChildSubject;
use AppBundle\Form\ChildSubjectType;

class ChildSubjectController extends Controller
{
    /**
     * @Route("/childSubject/new", name="new_childSubject")
     */
    public function createAction(Request $request)
    {

	   	$data = [];
        $user = $this->user();
        $subject_id = $request->query->get('subjectId');
        $subject = $this->find('Subject', $subject_id);
        $childSubjects = $this->em()->getRepository('AppBundle:ChildSubject')->findBy(array('user' => $user, 'subject' => $subject));
        $data['childSubjects'] = $childSubjects;
        $data['subject'] = $subject;
        $data['user'] = $user;

	    return $this->render('childSubject/create.html.twig', $data );

    }

    /**
     * @Route("/childSubject/list", name="list_childSubjects")
     */
    public function listAction(Request $request)
    {
        $data = [];
        $user = $this->user();
        $subject_id = $request->query->get('subjectId');
        $subject = $this->find('Subject', $subject_id);
        $childSubjects = $this->em()->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user, 'subject' => $subject),
                array('id' => 'ASC')
            );
        $data['subject'] = $subject;
        $data['childSubjects'] = $childSubjects;
        $data['user'] = $user;
        return $this->render('childSubject/list.html.twig', $data );
    }

    /**
     * @Route("/childSubject/formula", name="calculate_childSubjects")
     */
    public function formulaAction(Request $request)
    {
        $data = [];
        $user = $this->user();
        $subject_id = $request->query->get('subjectId');
        $subject = $this->find('Subject', $subject_id);
        $childSubjects = $this->em()->getRepository('AppBundle:ChildSubject')
            ->findBy(
                array('user' => $user, 'subject' => $subject),
                array('id' => 'ASC')
            );

          // find if there's formula for this subject
          $formula_for_this_subject = $this->em()->getRepository('AppBundle:Formula')
            ->findOneBy(
              array('subject' => $subject),
              array('id' => 'DESC')
            );

          if($formula_for_this_subject){
            $formula = $formula_for_this_subject->getCalculation();
            list($signs, $out_of, $to_percentage) = $this->analyze_formula($formula);

          } else {
            $string = "";
            $out_of = 0;
            foreach ($childSubjects as $childSubject) {
                $string .= "plus-".$childSubject->getId().":";
                $out_of += $childSubject->getOutOf();
            }
            $string .= "/".$out_of."x100";
            list($signs, $out_of, $to_percentage) = $this->analyze_formula($string);

          }


        $data['child_subjects'] = $childSubjects;
        $data['subject'] = $subject;
        $data['user'] = $user;
        $data['signs'] = $signs;
        $data['out_of'] = $out_of;
        $data['to_percentage'] = $to_percentage;
        return $this->render('childSubject/formula.html.twig', $data );
    }

    /**
     * @Route("/child_subject/class/choose/{goto}", name="choose_class_cs")
     */
    public function chooseAction(Request $request, $goto)
    {
        $data = [];
        $user = $this->user();
        $subjects = $this->findby('Subject', 'user', $user);
        $data['subjects'] = $subjects;
        $data['user'] = $user;
        $data['goto'] = $goto;
        return $this->render('childSubject/choose.html.twig', $data );
    }

    /**
     * @Route("/childSubjects/edit/{childSubjectId}", name="edit_childSubject")
     */
    public function editAction(Request $request, $childSubjectId)
    {
        $data = [];
        $childSubjects = $this->find('childSubject', $childSubjectId);
        $subject_id = $childSubjects->getSubject()->getId();

        $data['childSubject'] = $childSubjects;
        return $this->render('childSubject/edit.html.twig', $data );
    }

    /**
     * @Route("/childSubjects/delete/{childSubjectId}", name="delete_childSubject")
     */
    public function deleteAction(Request $request, $childSubjectId)
    {
        $data = [];
        $childSubject = $this->find('childSubject', $childSubjectId);
        $subject_id = $childSubject->getSubject()->getId();
        $this->delete($childSubject);
        return $this->redirectToRoute('list_childSubjects', ['subjectId' => $subject_id]);

    }

    private function  analyze_formula($formula){

      // plus-46:plus-47:ignore-48:/100x100
      $whole_formula_string = $formula;
      $top_part = explode("/", $whole_formula_string)[0]; // plus-46:plus-47:ignore-48:
      $remaining_two = explode("/", $whole_formula_string)[1]; // 100x100
      $bottom_part = explode("x", $remaining_two)[0]; // 100
      $right_part = explode("x", $remaining_two)[1];  // 100
      $exploded_top_part = explode(":", $whole_formula_string);
      $top_part_as_array = array_pop($exploded_top_part); // [plus-46, plus-47, ignore-48]
      $children = 0;
      $signs = [];

      foreach($exploded_top_part as $array_item){
        $split_str = explode("-", $array_item); // [plus, 46]
        $sign = $split_str[0]; // plus

            // make real signs
            switch ($sign) {
              case 'plus':
                $signs[] = "+";
                break;
              case 'minus':
                $signs[] = "-";
                break;
              case 'ignore':
                $signs[] = "";
                break;
              default:
                $signs[] = "+";
                break;
            }

        }
        return [$signs, $bottom_part, $right_part];
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
