<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:22 PM
 */

class Register extends Controller
{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('user/register');
    }

    public function create(){
        $data = array();
        $data['username'] = $_POST['username'];
        $data['email' ]= $_POST['email'];
        $data['password' ]= $_POST['password'];

        //@TODO Error checking
        $this->model->create($data);
        header('location:'.URL.'login');
    }
}