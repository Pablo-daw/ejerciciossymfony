<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocationController extends Controller
{
    public function indexAction()
    {
        $this -> addFlash('location', 'Tu estas localizado en Valladolid, España');

        return $this -> render('location/index.html.twig');
    }

    public function indexJsonAction(){
        $response = new Response(json_encode(array('location' => 'Tu estas localizado en Valladolid, España')));

        $response -> headers -> set('Content-Type', 'application/json');

        return $response;
    }
}
