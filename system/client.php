<?php if(!defined('SYSPATH'))die ('Request not found!');
    function input_get($key){
        return isset($_GET[$key]) ? $_GET[$key] : false;
    }
    function input_post($key){
        return isset($_POST[$key]) ? $_POST[$key] : false;
    }
   
?>