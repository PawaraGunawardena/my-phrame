<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:45 AM
 */

class Error extends Controller
{
    function __construct(){
        parent::__construct();
        $this->view->msg = 'There is an error in the request. Check and try again.';
        $this -> view -> render('error/index');
    }
}