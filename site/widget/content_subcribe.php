<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'http://localhost/worthtolive/public/site/';
$error = array();
require 'site/db/db_user.php';


?>
<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-8 col-sm-8 content_left">
        <hr>
    </div>
    <div class="col-md-4 col-sm-4 content_right">
        <div class="subcribe">
            <span class="title">Subcribe</span>
            <hr>
            <form method="post" enctype="multipart/form-data" action="">
                <h6 class="alert alert-danger" style="width:100%;">You have to enter all of field and valid values in this form!</h6>
                <input id="username" class="form-control" type="text" name="username" placeholder="Username">
                <input id="email" class="form-control" type="text" name="email" placeholder="Your email">
                <input class="form-control" type="text" name="Your phone" name="phone" placeholder="Phone number">
                <input class="form-control" type="file" name="avatar" >
                <input id="password"  class="form-control" type="password" name="password" placeholder="Your password">
                <input id="confirm_password" class="form-control" type="password" placeholder="Confirm password">
                <button  id="agree"  name="submit" type="submit" class="btn btn-info">Subcribe</button>
            </form>
        </div>
    </div>
</div>
