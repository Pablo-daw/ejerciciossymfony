<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GreetController extends Controller
{
    public function indexAction()
    {
        return new Response('Hola! Como estas?');
    }

    public function greetSomethingAction($something)
    {
        return new Response($something);
    }

    public function greetViewAction($something) {
        return $this->render('greet/index.html.twig', array(
            'something' => $something
        ));
        
    }
}
