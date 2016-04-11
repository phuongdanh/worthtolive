<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user_object = new process();

if (isset($_POST['submit'])) {
    if ($_FILES['avatar']['error'] > 0) {
        $error['user_avatar'] = 'Image is not fit!';
    } else {
        $path = '/public/site/images/users/'.$_FILES['avatar']['name'];
        // Upload file
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
            
        } else {
            $error['user_avatar'] = 'Image is not uploaded!';
        }
    }

    $data = array(
        'user_name' => input_post('username'),
        'user_email' => input_post('email'),
        'user_password' => md5(input_post('password')),
        'user_avatar' => $path,
        'user_phone' => input_post('phone'),
    );
    if ($user_object->add('users', $data)) {
        echo "Thanh cong";
    } else {
        echo "That bai roi cung";
    }
}


