<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Message;
use AppBundle\Entity\Sujet;
use AppBundle\Form\UserType;
use AppBundle\Form\SujetType;
use AppBundle\Form\MessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Users();
        $form = $this->createForm(UserType::class, $task);
            

     $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($task);
        $em->flush();

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }


        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function createTopicAction(Request $request)
    {
    
        $form = $this->createForm(SujetType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $topic = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($topic);
            $em->flush();
            $url = $this->generateUrl('topic_show', ['id' => $topic->getId()]);

            return $this->redirect($url);
        }

        return $this->render('default/sujet.html.twig', array(
            'form' => $form->createView(),
        ));
    }
/*
    public function respondAction(Request $request, $id)
    {
        
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirect($this->generateUrl('show', [
                'id' => $id . 'message-' . $messages->getId()
            ])

        }
        return $this->render('default/messagerie.html.twig', array(
            'message' =>$messages,
            'form' => $form->createView()

        ));
    }
    */

    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Sujet');

        return $this->render('default/list.html.twig', [
            'topics' => $repository->findAll()
        ]);
    }

    /**
     * @ParamConverter("topic", class="AppBundle:Sujet")
     */
    public function showAction(Sujet $topic)
    {       
        return $this->render('default/show.html.twig', ['sujet' => $topic]);
    }
}
