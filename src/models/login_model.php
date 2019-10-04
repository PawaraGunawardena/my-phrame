<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:51 PM
 */

class Login_Model extends Model{

    function __construct()
    {
        parent:: __construct();
    }

    public function run(){
        $statement= $this -> database->prepare("SELECT 
              username, password FROM user WHERE username = :username AND password = :password");

        $statement->execute(array(
            ':username' => $_POST['username'],
            ':password'=>$_POST['password']
        ));

        $data = $statement->  fetch();
        $count = $statement -> rowCount();

        if($count==1){
            Session::init();
            Session::set('loggedIn', true);
            Session::set('loggedUser',$_POST['username']);
            header('location: ../home/index');
        }else{
            header('location: ../login');
        }

        print_r($data);
    }
}