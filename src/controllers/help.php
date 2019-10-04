<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:46 PM
 */

class Help extends Controller
{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('help/index');
    }

}
