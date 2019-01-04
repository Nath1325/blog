<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 04/01/2019
 * Time: 10:58
 */

class Controller
{
    function render($filename) {
        require(ROOT.'views/'.get_class($this).'/'.$filename.'.php');
    }
}