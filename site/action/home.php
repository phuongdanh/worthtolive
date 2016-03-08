<?php if(!defined('SYSPATH'))die ('Request not found!'); ?>
<?php
   // $count = $object->count('SELECT count(*) as num_count from categories','num_count');

//        $data = array(
//            'news_title' => 'Trung quoc tan cong Viet Nam',
//            'news_slug' => 'Trung-quoc-tan-cong-Viet-Nam'
//        );
//      $object->update('news',$data,'news_title',"'Trung quoc tan cong Viet Namfghfhhh'");
    load_widget_header('header_home');
    load_toper();
    load_menu();
    load_content('content_home');
    load_login();
    load_footer();
?>