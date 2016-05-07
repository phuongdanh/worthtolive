<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Check if delete button active, start this 
$user_object = new process();
    $checkbox = input_post('checkbox');
    for ($i = 0; $i < count($checkbox); $i++) {
        $del_id = $checkbox[$i];
        $result = $user_object->delete('users', 'user_id', $del_id);
    }
// if successful redirect to delete_multiple.php 
    if ($result) {
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?action=user\">";
    }else{
        echo "Truy van sai";
    }
?>