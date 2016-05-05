<?php if(!defined('SYSPATH'))die ('Request not found!'); ?>
<?php
    load_widget_header('header_general');
    load_toper();
    load_menu();load_login();
    load_content('content_book');
    
    load_footer();
?>