<?php if(!defined('SYSPATH'))die ('Request not found!'); ?>
<?php
    load_widget_header('header_user');
    load_toper();
    load_menu();load_login();
    load_content('content_user');
    
    load_footer();
?>