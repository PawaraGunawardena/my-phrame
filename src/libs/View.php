<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:14 AM
 */

class View{
    function __construct(){

    }
    public function render($name, $noInclude = false){
        if($noInclude == true){
            require 'views/' . $name . '.php';
        }else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}