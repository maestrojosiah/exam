<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Code;
use AppBundle\Entity\Download;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class CodeController extends Controller
{

    /**
     * @Route("/code/generate/{qty}", name="generate_codes")
     */
    public function feedAction(Request $request, $qty){
        $data = [];

        // uncomment lines below to add codes to database
        for ($i=0; $i < $qty; $i++) {
            $randomString = $this->getRandStr();
            $code = new Code();
            $code->setRandomCode($randomString);
            $code->setStatus('virgin');
            $data[] = $randomString;
            $this->save($code);
        }

        // display 5 random codes if exists in database.
        $random_codes = $this->em()->getRepository('AppBundle:Code')
            ->getRandomCodes(5);
        $codes = [];
        foreach($random_codes as $code){ $codes[] = $code->getRandomCode(); }

        $string_of_codes = implode(", ", $codes);

        $data['rand_str'] = $string_of_codes;
        return $this->render('code/code.html.twig', $data);
    }

    /**
     * @Route("/code/check", name="check_code_validity")
     */
    public function checkCodeAction(Request $request)
    {

        $data = [];
        $user = $this->user();
        $tokens = $user->getTokens();
        $now = new \DateTime("now");
        $address = $this->generateUrl('my_downloads');
        $data['address'] = $address;
        $code = $request->request->get('code');
        $link = $request->request->get('link');
        $desc = $request->request->get('desc');
        $code_exists = $this->em()->getRepository('AppBundle:Code')->findByRandomCode($code);
        $virgin_code_exists = $this->em()->getRepository('AppBundle:Code')
          ->findOneBy(
                array('randomCode' => $code, 'status' => 'virgin'),
                array('id' => 'ASC')
            );

        if($code_exists){
            //code exists
            if($virgin_code_exists){
                $added_token = $tokens + 1;
                $user->setTokens($added_token);
                $this->save($user);
                $virgin_code_exists->setStatus("used");
                $this->save($virgin_code_exists);
                $download = new Download();
                $download->setTimes("4");
                $download->setStatus(1);
                $download->setLink($link);
                $download->setUser($user);
                $download->setDescription($desc);
                $this->save($download);
                $message = "Oh! thanks for purchasing the cup of tea for me. You now have $added_token active token(s). I feel encouraged :)";
            } else {
                $message = "You currently have $tokens active token(s). That code is already used. Please purchase another one.";
            }

            $success = true;
        } else {
            //code doesn't exist
            $message = "That code doesn't exist,  Please type correctly or purchase a code.";
            $success = false;
        }
        $data['message'] = $message;
        $data['success'] = $success;
        return new JsonResponse($data);
    }

	public function getRandStr(){
	  	$a = $b = '';

	  	for($i = 0; $i < 3; $i++){
		    $a .= chr(mt_rand(65, 90)); // see the ascii table why 65 to 90.
		    $b .= mt_rand(0, 9);
		}

  		return $a .'-'. $b;
	}

    private function em(){
        $em = $this->getDoctrine()->getManager();
        return $em;
    }

    private function save($entity){
        $this->em()->persist($entity);
        $this->em()->flush();
    }

    private function user(){
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $user;
    }

}
