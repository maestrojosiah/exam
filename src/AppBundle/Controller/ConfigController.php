<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Config;
use AppBundle\Form\ConfigType;


class ConfigController extends Controller
{
    /**
     * @Route("/settings", name="update_config")
     */
    public function setAction(Request $request)
    {
		$data = [];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $data['user'] = $user;

        $em = $this->getDoctrine()->getManager();

        $thisUser = $em->getRepository('AppBundle:Config')
        	->settingsForThisUser($user);


        if($thisUser){
        	$config = $thisUser;
          $originalName = $thisUser->getLetterHead();
        } else {
        	$config = new Config();
        }

        $config->setUser($user);
        $form = $this->createForm(ConfigType::class, $config);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $letterhead = $form->get('letterhead')->getData();
            if($letterhead){
                $originalName = $user->getId()."_logo".'.'.$letterhead->guessExtension();;
                $filepath = $this->get('kernel')->getProjectDir()."/web/img/";
                $letterhead->move($filepath, $originalName);
            }

            $config->setLetterhead($originalName);

            $em = $this->getDoctrine()->getManager();

            $config->setUser($user);

            $em->persist($config);
            $em->flush();

        	$this->addFlash(
	            'success',
	            'You\'re ok now. Start working!'
        	);

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('homepage');
		} else {
			$form_data['sch_name'] = $config->getSchName();
			$form_data['address'] = $config->getAddress();
			$form_data['telephone'] = $config->getTelephone();
            $form_data['results_per_page'] = $config->getResultsPerPage();
			$form_data['tour_guide'] = $config->getResultsPerPage();
			$data['form'] = $form_data;
		}


        // replace this example code with whatever you need
        return $this->render('config/configuration.html.twig',['form' => $form->createView()] );
    }
}
