<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:11 AM
 */

class Bootstrap{
    private $_url = null;
    function __construct(){
        // check the url is set or nnot
        $url = isset($_GET['url']) ? $_GET['url']:null ;

        // remove any ending / notations
        $url = rtrim($url, '/');

        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        // when url first attribute not exist
        if(empty($url[0])){
            /**
             * giving controller for the route index when url not specified
             * need a controller file in controller folder with the name index.php
             * this routing is similar to routing with the index as the url first attribute
             */
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        /**
         * when url first attribute exist routing:
        - need a controller file in controller folder with the same name as url first attribute
         */
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            //throw new Exception("The file '$file' does not exist");
            require 'controllers/error.php';
            $controller_error = new MyError();
            return false;
        }

        /**
         * handling second attribute of the url
         * remember already controller selected by requiring from the url first attribute
         * initiate the $controller variable from url first variable
         */
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        /**
         * looking whether there is an any second method called (second attribute exists for the route)
         * $url[1] gives any method name
         * framework takes second attribute values as the method name
         */

        /**
         * if any value post or get by url can address by the third attribute of the url
         * $url[2] gives any additional parameter value of the url
         * framework takes third attribute values as the parameter for the method call
         */
        if (isset($url[2])) {
            //if method have any additional parameters then this call the method while parsing the attribute value
            $controller->{$url[1]}($url[2]);
        } else{
            // call the method without additional parameters
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
            else{
                // if no any second parameter, then call the index() method of the controller class object
                $controller->index();
            }
        }
    }
}