<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:21 AM
 */

class Index extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('index/index');
    }

}