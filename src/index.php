<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 10:54 AM
 */


require 'config.php';

//loading all files in the lib folder
function __autoload($class) {
    require LIBS . $class .".php";
}

//initiate a Bootstrap class object from lib/Bootstrap file
$app = new Bootstrap();

?>