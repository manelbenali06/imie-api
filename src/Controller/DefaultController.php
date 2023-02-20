<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController  extends AbstractController
{
    public function home()
    {
        return new Response('<h1>Hello World !</h1>');
    }

    public function contact()
    {
        return new Response('<h1>Page Contact !</h1>');
    }

}