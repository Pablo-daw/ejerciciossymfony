<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemperatureController extends Controller
{
    public function getAction($id) {
        if ($id == null || $id != 1) {
            throw $this->createNotFoundException('No existe el id');
        } else{
            return new Response("Registro " . $id);
        }
    }
}
