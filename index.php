<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
       define('SYSPATH', 'system/');
       require SYSPATH.'client.php';
        $action = input_get('action');
        
        require SYSPATH.'site.php';
        
        if(file_exists('site/action/'.$action.'.php')){
            
            require SYSPATH.'database.php';
            $object = new process();
            require 'site/action/'.$action.'.php';
            
            $object->disconnect();
        }
        else{
            require_once 'site/action/show_404.php';
        }
        ?>
    </body>
</html>