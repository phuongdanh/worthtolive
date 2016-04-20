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
    </head>
    <body>
        <?php 
       define('SYSPATH', '../system/');
       require SYSPATH.'client.php';
        $action = input_get('action');
        
        require SYSPATH.'admin.php';
        require_once SYSPATH.'session.php';
        /* Process to comfirm user is admin*/
        
        
        
        if(file_exists('action/'.$action.'.php')){
            if(!isset($_SESSION['ss_user_token'])){
                $_SESSION['url'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                header('location: http://localhost/worthtolive/common/login.php');
            }
            require SYSPATH.'database.php';
            $object = new process();
            require 'action/'.$action.'.php';
            
            $object->disconnect();
        }
        else{
            require_once 'action/show_404.php';
        }
        ?>
    </body>
</html>
