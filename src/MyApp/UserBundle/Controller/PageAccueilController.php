<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageAccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:PageAccueil:index.html.twig');
    }
}
