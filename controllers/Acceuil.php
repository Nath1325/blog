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

        $this->loadModel('Article');
        /*
        $d['Article'] = array(
            'titre' => 'salut',
            'description' => 'ceci est un test'
        );
        */
        $d['articles'] = $this->Article->getAll();
        $this->set($d);
        $this->render('index');
    }

    function views ($id_article){
        $this->loadModel('Article');
        $d['article'] = $this->Article->FindById($id_article);
        $d['article'] = $d['article'][0];
        $this->set($d);
        $this->render('view');
    }


}