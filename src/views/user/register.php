<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 12:24 PM
 */

?>

<div style="padding: 100px;">

    <h1>Register into New Account</h1>

    <div style="padding-top: 20px;">
        <form class="form-signin" action = "<?php echo URL;?>register/create" method="POST">

            <div class="col-md-6" style="padding-left: 55px;">
                <input id="username" type="text" class="form-control" placeholder="Username" name="username" value="" required><br/><br/>
            </div>

            <div class="col-md-6" style="padding-left: 55px;">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="" required><br/><br/>
            </div>

            <div class="col-md-6" style="padding-left: 55px;">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
            </div>

            <br/>

            <div class="form-group" style="padding-left: 55px;" >
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>

        </form>
    </div>
</div>
