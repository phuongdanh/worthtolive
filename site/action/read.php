<?php if(!defined('SYSPATH'))die ('Request not found!'); ?>
<?php
    load_widget_header('header_read');
    load_toper();
    load_menu();load_login();
    load_content('content_read');
    
    load_footer();
?>