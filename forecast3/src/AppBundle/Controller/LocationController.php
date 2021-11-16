<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocationController extends Controller
{
    public function indexAction()
    {
        $this -> addFlash('location', 'Tu estas localizado en Valladolid, España');

        return $this -> render('location/index.html.twig');
    }
}
