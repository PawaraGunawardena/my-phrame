<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:44 AM
 */

class Model{

    function __construct()
    {
        $this->database = new Database(DB_TYPE,DB_HOST,DB_NAME,DB_USER,DB_PASS);
    }
}