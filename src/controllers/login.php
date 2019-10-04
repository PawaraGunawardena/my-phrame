<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:31 PM
 */

class Login extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('user/login');
    }

    function run(){
        $this->model->run();
    }
}