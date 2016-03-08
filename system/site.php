<?php
if(!defined('SYSPATH'))die ('Request not found!');
    function load_header(){
        require ('site/widget/header_general.php');
    }
    function load_toper(){
        require ('site/widget/toper.php');
    }
    function load_footer(){
        require ('site/widget/footer.php');
    }
    function load_widget_header($widget){
        require ('site/widget/'.$widget.'.php');
    }
    function load_menu(){
        require ('site/widget/menu.php');
    }
    function load_login(){
        require ('site/widget/login.php');
    }
    function load_content($widget){
        require ('site/widget/'.$widget.'.php');
    }
    
?>