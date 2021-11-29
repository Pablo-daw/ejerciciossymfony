<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NumberController extends Controller
{
    public function indexAction($num1, $num2)
    {
        $sum = $num1 + $num2;

        return new Response(
            '<html><body>' .
            '<p>La suma de los dos numeros es: ' . $sum . '</p>' .
            '</body></html>'
        );
    }

    public function index2Action($num1, $num2)
    {
        $sub = $num1 - $num2;

        return new Response(
            '<html><body>' .
            '<p>La resta de los dos numeros es: ' . $sub . '</p>' .
            '</body></html>'
        );
    }

    public function index3Action($num1, $num2)
    {
        $mul = $num1 * $num2;

        return new Response(
            '<html><body>' .
            '<p>La multiplicación de los dos numeros es: ' . $mul . '</p>' .
            '</body></html>'
        );
    }

    public function index4Action($num1, $num2)
    {
        $div = $num1 / $num2;

        return new Response(
            '<html><body>' .
            '<p>La division de los dos numeros es: ' . $div . '</p>' .
            '</body></html>'
        );
    }

    public function allAction($num1, $num2)
    {
        $sum = $num1 + $num2;
        $sub = $num1 - $num2;
        $mul = $num1 * $num2;
        $div = $num1 / $num2;

        return new Response(
            '<html><body>' .
            '<p>La suma de los dos numeros es: ' . $sum . '</p>' .
            '<p>La resta de los dos numeros es: ' . $sub . '</p>' .
            '<p>La multiplicación de los dos numeros es: ' . $mul . '</p>' .
            '<p>La division de los dos numeros es: ' . $div . '</p>' .
            '</body></html>'
        );
    }
}


