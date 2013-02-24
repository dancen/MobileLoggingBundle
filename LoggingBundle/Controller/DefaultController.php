<?php

namespace Mobile\LoggingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MobileLoggingBundle:Default:index.html.twig', array('name' => $name));
    }
}
