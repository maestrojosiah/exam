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
      $user = $this->container->get('security.token_storage')->getToken()->getUser();
      $em = $this->getDoctrine()->getManager();
      $config = $em->getRepository('AppBundle:Config')
        ->findOneBy(
              array('user' => $user),
              array('id' => 'DESC')
          );

      if(!$config){
          return $this->redirectToRoute('update_config');
      }
        return $this->render('default/index.html.twig');
    }
}
