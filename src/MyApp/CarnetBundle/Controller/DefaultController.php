<?php

namespace MyApp\CarnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppCarnetBundle:Default:index.html.twig', array('name' => $name));
    }
}
