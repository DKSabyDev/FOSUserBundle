<?php

namespace CRC\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRCHelloBundle:Default:index.html.twig');
    }
}
