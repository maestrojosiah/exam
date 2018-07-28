<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Classs;
use AppBundle\Entity\Subject;
use AppBundle\Entity\Student;
use AppBundle\Entity\ExamCompany;
use AppBundle\Entity\ChildSubject;
use AppBundle\Entity\Formula;
use AppBundle\Entity\Grading;

class AjaxController extends Controller
{

  /**
   * @Route("/exam/save/entity", name="save_entity")
   */
  public function saveAction(Request $request)
  {

      $user = $this->user();
      $entity = $request->request->get('entity');
      $return = $request->request->get('return');
      $fields = $request->request->get('fields');
      $values = $request->request->get('values');

      $fields_with_values = array_combine($fields, $values);

      switch ($entity) {
        case 'Classs':
          $this_entity = new Classs();
          break;
        case 'Subject':
          $this_entity = new Subject();
          break;
        case 'Student':
          $this_entity = new Student();
          $this_entity->setClass($this->find('Classs', $fields_with_values['class_id']));
          break;
        case 'ChildSubject':
          $this_entity = new ChildSubject();
          $this_entity->setSubject($this->find('Subject', $fields_with_values['subject_id']));
          break;
        case 'ExamCompany':
          $this_entity = new ExamCompany();
          $this_entity->setClass($this->find('Classs', $fields_with_values['class_id']));
          break;
        case 'Grading':
          if($fields_with_values['subject_id'] != 'all'){
            $subject = $this->find('Subject', $fields_with_values['subject_id']);
            $this_entity = $this->findForThisSubject($subject, $fields_with_values['minimum'], $fields_with_values['maximum']);
            $this_entity->setSubject($subject);
          } else {
            foreach($user->getSubjects() as $subject){
              $this_entity = $this->findForThisSubject($subject, $fields_with_values['minimum'], $fields_with_values['maximum']);
              $this_entity->setSubject($subject);
              foreach ($fields_with_values as $key => $value) {
                if (strpos($key, '_id') == false) {
                  $str = "set$key";
                  $this_entity->$str($value);
                }
              }
              $this_entity->setUser($user);
              $this->save($this_entity);
            }
          }
          break;
        case 'Formula':
          $subject = $this->find('Subject', $fields_with_values['subject_id']);
          $found_one_for_this_subject = $this->em()->getRepository('AppBundle:Formula')
            ->findOneBy(
              array('subject' => $subject),
              array('id' => 'DESC')
            );
          if($found_one_for_this_subject){
            $this_entity = $found_one_for_this_subject;
          } else {
            $this_entity = new Formula();
          }
          $this_entity->setSubject($subject);
          break;
      }
      if($entity != "Formula"){
        $this_entity->setUser($this->user());
      }
      
      foreach ($fields_with_values as $key => $value) {
        if (strpos($key, '_id') == false) {
          $str = "set$key";
          $this_entity->$str($value);
        }
      }

      $this->save($this_entity);
      $to_return = $this_entity->$return();

      return new JsonResponse($to_return);
  }

  /**
   * @Route("/exam/edit/entity", name="edit_entity")
   */
  public function editAction(Request $request)
  {

      $user = $this->user();
      $entity = $request->request->get('entity');
      $id = $request->request->get('id');
      $fields = $request->request->get('fields');
      $values = $request->request->get('values');

      $fields_with_values = array_combine($fields, $values);
      $this_entity = $this->find($entity, $id);

      $this_entity->setUser($this->user());
      foreach ($fields_with_values as $key => $value) {
        if (strpos($key, '_id') == false) {
          $str = "set$key";
          $this_entity->$str($value);
        }
      }
      $this->save($this_entity);
      return new JsonResponse("true");
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

  private function findForThisSubject($subject, $minimum, $maximum){
    $found_one_for_this_subject = $this->em()->getRepository("AppBundle:Grading")
      ->findOneBy(
        array('subject' => $subject, 'minimum' => $minimum, 'maximum' => $maximum),
        array('id' => 'DESC')
      );
    if($found_one_for_this_subject){
      $this_entity = $found_one_for_this_subject;
    } else {
      $this_entity = new Grading();
    }
    return $this_entity;
  }
}
