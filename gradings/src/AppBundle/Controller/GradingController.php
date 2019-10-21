<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Grading;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Grading controller.
 *
 * @Route("grading")
 */
class GradingController extends Controller
{
    /**
     * Lists all grading entities.
     *
     * @Route("/", name="grading_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gradings = $em->getRepository('AppBundle:Grading')->findAll();

        return $this->render('grading/index.html.twig', array(
            'gradings' => $gradings,
        ));
    }

    /**
     * Creates a new grading entity.
     *
     * @Route("/new", name="grading_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $grading = new Grading();
        $user = $this->user();
        $grading->setUser($user);
        $subjects = $this->em()->getRepository('AppBundle:Subject')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        $gradings = $this->em()->getRepository('AppBundle:Grading')
            ->findBy(
                array('user' => $user),
                array('id' => 'ASC')
            );

        return $this->render('grading/new.html.twig', array(
            'grading' => $grading,
            'gradings' => $gradings,
            'subjects' => $subjects,
        ));
    }

    /**
     * Finds and displays a grading entity.
     *
     * @Route("/{id}", name="grading_show")
     * @Method("GET")
     */
    public function showAction(Grading $grading)
    {
        $deleteForm = $this->createDeleteForm($grading);

        return $this->render('grading/show.html.twig', array(
            'grading' => $grading,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing grading entity.
     *
     * @Route("/{id}/edit", name="grading_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $grading = $this->em()->getRepository('AppBundle:Grading')
          ->find($id);
        $user = $this->user();
        $grading->setUser($user);

        return $this->render('grading/edit.html.twig', array(
            'grading' => $grading,
        ));
    }

    /**
     * Deletes a grading entity.
     *
     * @Route("/{id}", name="grading_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $grading = $this->em()->getRepository('AppBundle:Grading')
          ->find($id);
        $user = $this->user();
        $this->delete($grading);
        return $this->redirectToRoute('grading_index');
    }

    /**
     * Creates a form to delete a grading entity.
     *
     * @param Grading $grading The grading entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Grading $grading)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('grading_delete', array('id' => $grading->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
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
