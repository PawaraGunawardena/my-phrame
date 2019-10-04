<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:46 PM
 */

class Home extends Controller{
    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');

        if($logged == false){
            Session::destroy();
            header('location: login');
            exit;
        }
    }

    function index(){
        $this->view->render('home/index');
    }

    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }
}