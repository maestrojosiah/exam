<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Config;
use AppBundle\Form\ConfigType;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Classs;
use AppBundle\Entity\Student;

class ConfigController extends Controller
{
    /**
     * @Route("/settings", name="update_config")
     */
    public function setAction(Request $request)
    {
      ini_set('memory_limit', '-1');
	    $data = [];
      $user = $this->container->get('security.token_storage')->getToken()->getUser();
      $data['user'] = $user;

      $em = $this->getDoctrine()->getManager();
      // look for settings for this user.
      $thisUser = $em->getRepository('AppBundle:Config')
      	->settingsForThisUser($user);

      // if found, the update this setting, don't create a new one.
      if($thisUser){
      	$config = $thisUser;
        $formerFileName = $config->getLetterHead();
      } else { // if not found, create a new entity.
      	$config = new Config();
        // assing user to the setting.
        $config->setUser($user);
      }
      // initialize a form.
      $form = $this->createForm(ConfigType::class, $config);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $letterhead = $form->get('letterhead')->getData();
          if (is_object($letterhead)){
              $originalName = $user->getId()."_logo".'.'.$letterhead->guessExtension();;
              $filepath = $this->get('kernel')->getProjectDir()."/web/img/";
              $letterhead->move($filepath, $originalName);
              $config->setLetterhead($originalName);
          } else {
            $config->setLetterhead($formerFileName);
          }

          $em = $this->getDoctrine()->getManager();
          
          $config->setUser($user);

          $em->persist($config);
          $em->flush();

        	$this->addFlash(
              'success',
              'Settings saved!'
        	);

          return $this->redirectToRoute('update_config');

  		} else {

  			$form_data['sch_name'] = $config->getSchName();
  			$form_data['address'] = $config->getAddress();
  			$form_data['telephone'] = $config->getTelephone();
        $form_data['results_per_page'] = $config->getResultsPerPage();
  			$form_data['tour_guide'] = $config->getTourGuide();
        $form_data['chart_limit'] = $config->getChartLimit();
  			$form_data['letterhead_height'] = $config->getLetterHeadHeight();
  			$form_data['title_display'] = $config->getTitleDisplay();
  			$form_data['letterhead'] = $config->getLetterHead();
  			$data['form'] = $form_data;
  		}

      $all_settings = $em->getRepository('AppBundle:Config')->findAll();
      $schools_list = [];
      foreach ($all_settings as $key => $setting) {
        $user = $setting->getUser();
        $classes_for_user = $user->getClasses();
        $classes_list = $setting->getSchName() . " => ";
        foreach ($classes_for_user as $key => $classs) {
          if($user != $this->user()){
            $classes_list .= " class ". $classs->getCTitle().": [". count($classs->getStudents()). " students], ";
          }
        }
        if($user == $this->user()){
            $classes_list .= "You created this.";
        }
        $schools_list[$setting->getId()] = $classes_list;
      }
      $data['schools'] = $schools_list;

        // replace this example code with whatever you need
        return $this->render('config/configuration.html.twig',['form' => $form->createView(), 'data' => $data] );
    }

    /**
     * @Route("/config/import", name="import_students_to_user")
     */
    public function importAction(Request $request)
    {
      ini_set('memory_limit', '-1');
        $setting_id = $request->request->get('setting_id');
        $setting = $this->em()->getRepository('AppBundle:Config')->find($setting_id);
        $this_user = $this->user();
        $selected_user = $setting->getUser();

        $config_exists = $this->em()->getRepository('AppBundle:Config')->settingsForThisUser($this_user);

        if($config_exists){
        	$config = $config_exists;
        } else {
        	$config = new Config();
        }
        //save settings
        $config->setUser($this_user);
        $config->setSchName($setting->getSchName());
        $config->setAddress($setting->getAddress());
        $config->setTelephone($setting->getTelephone());
        $config->setResultsPerPage($setting->getResultsPerPage());
        $config->setTourGuide($setting->getTourGuide());
        $config->setLetterHead($setting->getLetterHead());
        $config->setLetterHeadHeight($setting->getLetterHeadHeight());
        $config->setTitleDisplay($setting->getTitleDisplay());
        $this->save($config);
        // the classes that belong to the selected user setting
        $selected_user_classes = $selected_user->getClasses();

        // loop through the classes while saving each of them to the current user.
        foreach ($selected_user_classes as $sel_user_class){
          $class = new Classs();
          $class->setCTitle($sel_user_class->getCTitle()."cp");
          $class->setClassTeacher($sel_user_class->getClassTeacher());
          $class->setUser($this_user);
          $this->save($class);
          $new_class = $this->em()->getRepository('AppBundle:Classs')->find($class->getId());

          // students that belong to the selected user's class. the class for this loop...
          $selected_class_students = $sel_user_class->getStudents();
          foreach($selected_class_students as $sel_usr_student){
            $student = new Student();
            $student->setNames($sel_usr_student->getNames());
            $student->setGender($sel_usr_student->getGender());
            $student->setUser($this_user);
            $student->setClass($new_class);
            $this->save($student);
          }
        }

        return new JsonResponse($setting_id);

    }

    private function em(){
        $em = $this->getDoctrine()->getManager();
        return $em;
    }

    private function save($entity){
        $this->em()->persist($entity);
        $this->em()->flush();
        return true;
    }

    private function user(){
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $user;
    }

}
