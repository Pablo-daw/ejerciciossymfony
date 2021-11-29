<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForwardController extends Controller
{
    public function indexAction()
    {
        $response = $this->forward('AppBundle:Forward:finish', array(
            'test' => true,
        ));
        return $response;
    }

    public function finishAction($test)
    {
        if ($test) {
            return new Response('Redireccionamiento ha sido recibido correctamente');
        } else {
            return new Response('Redireccionamiento ha fallado');
        }
    }
}
