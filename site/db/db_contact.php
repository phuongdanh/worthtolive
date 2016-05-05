<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$contact_object = new process();


if(isset($_POST['submit'])){
    $data = array(
        'contact_name' => $_POST['user_name'],
        'contact_email' => $_POST['user_email'],
        'contact_content' => $_POST['user_message'],
    );
    $flag = $contact_object->add('contacts', $data);
    if($flag){
        echo '<script language="javascript">';
        echo 'alert("You have sent a message to Worthtolive!");';
        echo 'window.location.assign("index.php?action=contact");';
        echo '</script>';
        die();
    }else{
        echo 'Sending message not successfully';
    }
}