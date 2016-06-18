<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Message;
use AppBundle\Form\UserType;
use AppBundle\Form\MessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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

     public function addmessageAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);

     $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();

    }
        return $this->render('default/messagerie.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction()
    {       
     $messages = $this  -> getDoctrine()
                        ->getRepository('AppBundle:Message')
                        ->findAll();


    return $this->render('default/show.html.twig', array(
        'message'  => $messages
    ));
    }
}