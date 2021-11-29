<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SessionController extends Controller
{
    public function indexAction($name, $pass, Request $request) 
    {
        $session = $request->getSession();

        if ($name == "admin" && $pass == "1234") {
            $session->set('name', $name);
            $session->set('pass', $pass);
            return $this->forward('AppBundle:Session:finish', array(
                'name' => $name,
                'pass' => $pass,
            ));
        } else {
            if($pass[0] == strtoupper($pass[0])){
                throw $this->createNotFoundException('La contraseña debe comenzar en minusculas');
            } else {
                return $this->render('session/index.html.twig');
            }
            
        }        
    }

    public function finishAction($name, $pass)
    {
        return new Response('Usuario ha sido autenticado correctamente', array(
            'name' => $name,
            'pass' => $pass));
    }
}


