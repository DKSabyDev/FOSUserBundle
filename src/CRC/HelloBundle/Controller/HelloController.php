<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CRC\HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Description of HelloController
 *
 * @author DSK
 */
class HelloController extends Controller{
   
    public function HelloAction() {
        //die('ok');
        $hello= 'Bonjour';
        $hel= 'Mr. Pascal';
        $he= 'Aurevoir';
        
        return $this->render('CRCHelloBundle:Hello:hello.html.twig',
                array('Hello'=>$hello,'Hel'=>$hel,'He'=>$he));
        
    
             
    }
    
}
