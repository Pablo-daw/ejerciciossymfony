<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalculatorController extends Controller
{
    public function indexAction($age)
    {
        $currentYear = date('Y');

        return new Response(
            '<html><body>Tu edad es: ' . $age . '<br>' .
            'Tu edad en el año ' . $currentYear . ' sería: ' . ($currentYear - $age) . '</body></html>'
        );
    }
}