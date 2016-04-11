<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db/db_new.php';
// Check if delete button active, start this 

    $checkbox = input_post('checkbox');
    for ($i = 0; $i < count($checkbox); $i++) {
        $del_id = $checkbox[$i];
        $result = $new_object->delete('news', 'news_id', $del_id);
    }
// if successful redirect to delete_multiple.php 
    if ($result) {
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?action=news\">";
    }else{
        echo "Truy van sai";
    }


?>