<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DownloadController extends Controller
{
    /**
     * @Route("/downloads", name="my_downloads")
     */
    public function myDownloadsAction()
    {
    	$user = $this->user();
    	$data = [];
    	$downloads = $this->em()->getRepository('AppBundle:Download')
    		->findBy(
    			array('user' => $user),
    			array('id' => 'DESC'),
    			20
    		);
    	$data['downloads'] = $downloads;

      return $this->render('AppBundle:Download:my_downloads.html.twig', $data);
    }

    /**
     * @Route("/downloads/delete/{downloadId}", name="delete_download")
     */
    public function deleteAction(Request $request, $downloadId)
    {
    	$download = $this->em()->getRepository('AppBundle:Download')->find($downloadId);
    	$this->delete($download);
        return $this->redirectToRoute('my_downloads');
    }

    /**
     * @Route("/downloads/{what}", name="download")
     */
    public function downloadItAction(Request $request, $what){
    	$user = $this->user();
    	$string = "download_$what";
        $a = $request->query->get('a');
        $b = $request->query->get('b');
        $downloadId = $request->query->get('c');
    	$download = $this->em()->getRepository('AppBundle:Download')->find($downloadId);
    	$url = $this->generateUrl($string, ['classId' => $a, 'companyId' => $b]) ;
    	$data = [];
    	$downloads = $this->em()->getRepository('AppBundle:Download')
    		->findBy(
    			array('user' => $user),
    			array('id' => 'DESC')
    		);
    	$data['downloads'] = $downloads;
    	if($user->getTokens() < 1){
    		$download->setStatus(0);
    		$this->save($download);
    		return $this->render('AppBundle:Download:my_downloads.html.twig', $data);
    	} else {
    		$times = $download->getTimes();
    		if($times == 0){
    			$download->setStatus(0);
    			$active = false;
    			$user->setTokens("0");
    			$this->save($user);
    		} else if ($times == 1){
          $download->setStatus(0);
          $active = true;
          $user->setTokens("0");
    			$this->save($user);
        } else {
    			$active = true;
    		}
    		if($active == true){
	    		$remaining_downloads = $times;
	    		$new_remaining_downloads = $remaining_downloads - 1;
	    		$download->setTimes($new_remaining_downloads);
	    		$this->save($download);

		    	$response = new RedirectResponse($url);
				return $response;
    		} else {
          $data['active'] = $active;
    			return $this->render('AppBundle:Download:my_downloads.html.twig', $data);
    		}
    	}
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

    private function delete($entity){
        $this->em()->remove($entity);
        $this->em()->flush();
        return true;
    }

}
