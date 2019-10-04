<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:51 PM
 */

class Register_Model extends Model{

    function __construct()
    {
        parent:: __construct();
    }

    public function create($data){
        $this-> database ->insert('user', array(
            'username' => $data['username'],
            'email' => $data['email'],
//            'password' => Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
            'password'=>$data['password']
        ));
    }
}