<?php



namespace CRC\HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parler
 *
 * @author DSK
 */
class ParlerController extends Controller{
   
    public function ParlerAction() { //die('ok');
        //die('ok');
       $hello= 'Nous sommes à CRC tous les jours 9h à 17h';
        return $this->render('CRCHelloBundle:Hello:Parler.html.twig',
                array('Hello'=>$hello));
    //put your code here
}
}
