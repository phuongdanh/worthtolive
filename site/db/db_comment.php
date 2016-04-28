<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class comment extends process {
     
    function get_list_comment($news_id){
        $list_comment = $this->get_list("SELECT * FROM comments WHERE news_id = ".$news_id);
    }
    
};
$comment_object = new comment();

//Thuc hien add comment
if(isset($_POST['comment_button'])){
   
    $data_comment = array(
        'comment_content' => input_post('comment_content'),
        'news_id' => input_post('news_id'),
        'add_user_id' => $_SESSION['ss_user_token']['user_id'],
        'add_username' => $_SESSION['ss_user_token']['username'],
        'add_datetime' => time(),
    );
    $send = $comment_object->add('comments', $data_comment);
    if(!$send){
        echo '<div class="alert alert-warning">Chen that bai</div>'; 
    }else{
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]\">";
    }
}

