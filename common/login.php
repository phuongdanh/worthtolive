<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href='../public/site/css/login.css' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">

        <title>Login - worthtolive</title>

    </head>

    <body>
        <?php

        function input_post($key) {
            return isset($_POST[$key]) ? $_POST[$key] : false;
        }

        require '../system/database.php';
        require '../system/session.php';
        require '../system/validate.php';
        $valid = new valid();
        $error = array();
        $data = new process();
        require 'process_session_admin.php';
        ?>
        <div class="login-block">
            <form action="" method="post">
                <!--Neu co doan xu ly $_SESSION['url'] thi hay dung isset truoc --->
                <h1>Login</h1>
                <input type="text" value="" placeholder="Username" name="username" id="username" />
                <?php echo $valid->show_error($error, 'username') ?>
                <input type="password" value="" placeholder="Password" name="password" id="password" />
                <?php echo $valid->show_error($error, 'password') ?>
                <button name="login" type="submit" >Submit</button>
            </form>
        </div>
    </body>
</html>