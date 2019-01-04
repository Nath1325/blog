<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 04/01/2019
 * Time: 11:02
 */

class Acceuil extends Controller
{
    function index(){

        $d = array();
        $d['Article'] = array(
            'titre' => 'salut',
            'description' => 'ceci est un test'
        );
        $this->render('index');
    }


}