<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 04/01/2019
 * Time: 10:58
 */

class Controller
{
    var $vars = array();
    var $layout = 'default';

    function set($d){
        $this->vars = array_merge($this->vars,$d);
    }

    function render($filename) {
        extract($this->vars);
        ob_start();
        require(ROOT.'views/'.get_class($this).'/'.$filename.'.php');
        $content_layout = ob_get_clean();
        if ($this->layout==false) {
            echo $content_layout;
        }
        else{
            require (ROOT.'views/layout/'.$this->layout.'.php');
        }
    }

    function loadModel ($name){
        require_once(ROOT.'models/'.$name.'.php');
        $this->name=new $name();
    }


}