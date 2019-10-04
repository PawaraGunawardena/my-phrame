<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:22 AM
 */

?>
<html>
<head>
    <!--        Header file head-->
    <title>
        MyPHrame
    </title>

    <link rel= "stylesheet" href="<?php echo URL;?>public/css/default.css"/>

    <script type="text/javascript" src="<?php echo URL;?>public/js/jquery.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <?php
    if (isset($this->js)){
        foreach($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL .'views/'. $js . '"></script>"';
        }
    }
    ?>


    <link rel="shortcut icon" type="image/x-icon" href="resources/favicon.jpg" />


</head>

<body>
<!--            Header body-->
<?php Session::init();?>
<div id="header" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" ">
<br/>

<?php if (Session::get('loggedIn') == false) {?>
    <a href="help" class="btn btn-dark" role="button">Help</a><br>
    <a href="index"class="btn btn-dark" role="button">MyPHrame</a>
    <a href="<?php echo URL; ?>register" class="btn btn-dark" role="button">Register</a>
    <a href="<?php echo URL; ?>login" class="btn btn-dark" role="button">Login</a>


<?php } ?>

<?php if (Session::get('loggedIn') == true) {?>
    <a href="index" class="btn btn-dark" role="button">Home</a>
    <a href="<?php echo URL; ?>home/logout" class="btn btn-dark" role="button">Logout</a>

<?php } ?>

</div>
</body>
</html>