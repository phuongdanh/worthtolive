<?php if(!defined('SYSPATH'))die ('Request not found!'); ?>
<?php
    load_widget_header('header_blog');
    load_toper();
    load_menu(); load_login();
    load_content('content_blog');
   
    load_footer();
?>