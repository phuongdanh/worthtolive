<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin - Worthtolive</title>
        <style type="text/css" media="screen">

            .not_admin .container{
                border-top: 30px solid #ecaa09;
                font-size: 20px;
                text-align: center;
            }
            .not_admin a{
                text-decoration: none;
                color: red;
            }
            .not_admin h6{
                font-size: 20px;
                font-weight: normal;

            }
            .not_admin h1{
                text-transform: uppercase;
                font-size: 35px;
            }
            .not_admin h1 span{
                font-size: 150px;
                color: #d64c00;
                font-family: fantasy;
            }
        </style>
    </head>
    <body>
        <?php
        define('SYSPATH', '../system/');
        require SYSPATH . 'client.php';
        $action = input_get('action');
//        if(!$action){
//            $action='home';
//        }
        require SYSPATH . 'admin.php';
        require_once SYSPATH . 'session.php';
        /* Process to comfirm user is admin */



        if (file_exists('action/' . $action . '.php')) {
            if (!isset($_SESSION['ss_user_token'])) {
                $_SESSION['url'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                header('location: ../common/login.php');
            } elseif ($_SESSION['ss_user_token']['level'] != 1) {
                echo '<div class="not_admin">
	<div class="container">
            <h1><span>X</span> you are not administrator</h1>
            <p>You must to exit this page. Go to our <a href="../index.php?action=home" title="">home page</a></p>
	</div>
        </div>
';
                
                
                
                
                
            } else {
                require SYSPATH . 'database.php';
                $object = new process();
                require 'action/' . $action . '.php';

                $object->disconnect();
            }
        } else {
            require_once 'action/show_404.php';
        }
        ?>
    </body>
</html>
