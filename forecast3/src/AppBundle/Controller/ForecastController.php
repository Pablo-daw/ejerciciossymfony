<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ForecastController extends Controller
{
    public function indexAction() {        
        return new Response('Hace un frio helador!');
    }
    
    public function indexParamAction($weather) {        
        return new Response('<html><body>Info del tiempo: Hace ' . $weather . '</body></html>');
    }

    public function index2ParamsAction($weather,$temperature) {        
        return new Response('<html><body>Info del tiempo: Hace ' . $weather . ' y la temperatura es: ' . $temperature . 'ºC</body></html>');
    }

    public function indexRequestAction($weather, $temperature, Request $request) {        
        return new Response('<html><body>Info del tiempo en ' . $request->query->get("ciudad") . ': Hace ' . $weather . ' y la temperatura es: ' . $temperature . 'ºC</body></html>');
    }
}