<?php session_start(); ?>
        <?php 
       define('SYSPATH', 'system/');
       require SYSPATH.'client.php';
        $action = input_get('action');
        
        require SYSPATH.'site.php';
        require_once SYSPATH.'validate.php';
        require_once SYSPATH.'session.php';
        if(file_exists('site/action/'.$action.'.php')){
            $_SESSION['url_for_user'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            require SYSPATH.'database.php';
            $object = new process();
            require 'site/action/'.$action.'.php';
            $object->disconnect();
        }
        else{
            require_once 'site/action/show_404.php';
        }
        ?>
 