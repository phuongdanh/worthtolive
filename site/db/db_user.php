<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user_object = new process();


$action = input_post('type_action');
if ($action == 'user_add') { /* --------------------------------------cai nay la phan them ban nhe-------- */
    if (isset($_POST['submit'])) {
        if ($_FILES['avatar']['error'] > 0) {
            $error['user_avatar'] = 'Image is not fit!';
        } else {
            $path = 'public/site/images/users/' . $_FILES['avatar']['name'];
            // Upload file
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
                
            } else {
                $error['user_avatar'] = 'Image is not uploaded!';
            }
        }
        //Process current date
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        //set mui gio

        $data = array(
            'user_name' => input_post('username'),
            'user_email' => input_post('email'),
            'user_phone' => input_post('phone'),
            'add_date_time' => date('Y/m/d H:i:s', time()),
        );
        if (isset($path)) {
            $data['user_avatar'] = $path;
        }
        //Validate information user enter
        //validate username
        if ($valid->valid_is_empty($data['user_name'])) {
            $error['user_name'] = 'You must enter username';
        } else if ($user_object->exist('users', 'user_name', $data['user_name'], 'user_id')) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['user_name'] = 'Username is already exist!';
        }
        //validate email
        if ($valid->valid_is_email($data['user_email'])) {
            $error['user_email'] = 'Unvalid email';
        } else if ($user_object->exist('users', 'user_email', $data['user_email'], 'user_id')) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['user_email'] = 'Email is already exist!';
        }
        //validate phone number
        if ($valid->valid_is_phone($data['user_phone'])) {
            $error['user_phone'] = 'Unvalid number';
        } else if ($user_object->exist('users', 'user_phone', $data['user_phone'], 'user_id')) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['user_phone'] = 'Phone number is already exist!';
        }

        $password = input_post('password');
        $confirm_password = input_post('confirm_password');
        if (isset($password)) {
            if (strlen($password) < 8) {
                return $error['user_password'] = "Password is at least 8 character!";
            }
            if (isset($confirm_password)) {
                if ($password != $confirm_password) {
                    return $error['user_confirm_password'] = "Confirm your password again!";
                } else {
                    $data['user_password'] = md5($password);
                }
            } else {
                return $error['user_confirm_password'] = "You have to enter your confirm password!";
            }
        } else {
            return $error['user_password'] = "You have to enter your password!";
        }


        if (empty($error)) {
            $flag = $user_object->add('users', $data);
            if ($flag) {
                echo '<script language="javascript">';
                echo 'alert("You have descripted successfully");';
                echo 'window.location.assign("index.php?action=home");';
                echo '</script>';
                die();
            }
        }
    }
}
if ($action == 'user_edit') { /* --------------------------------------cai nay la phan them ban nhe-------- */
    if (isset($_POST['submit'])) {
        if ($_FILES['new_avatar']['name'] != NULL) {

            $path = 'public/site/images/users/' . $_FILES['new_avatar']['name'];
            // Upload file
            move_uploaded_file($_FILES['new_avatar']['tmp_name'], $path);
        } else {
            $path = input_post('current_avatar');
        }

        //Process current date
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        //set mui gio
        $id = input_post('id');
        $data1 = array(
            'user_id' => $id,
            'user_name' => input_post('username'),
            'user_email' => input_post('email'),
            'user_phone' => input_post('phone'),
            'add_date_time' => date('Y/m/d H:i:s', time()),
        );
        if (isset($path)) {
            $data1['user_avatar'] = $path;
        }
        //Validate information user enter
        //validate username
        if ($valid->valid_is_empty($data1['user_name'])) {
            $error['user_name'] = 'You must enter username';
        } else if ($user_object->edit_exist('users', 'user_name', $data1['user_name'], 'user_id', $data1['user_id'])) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['user_name'] = 'Username is already exist!';
        }
        //validate email
        if ($valid->valid_is_email($data1['user_email'])) {
            $error['user_email'] = 'Unvalid email';
        } else if ($user_object->edit_exist('users', 'user_email', $data1['user_email'], 'user_id', $data1['user_id'])) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['user_email'] = 'Email is already exist!';
        }
        //validate phone number
        if ($valid->valid_is_phone($data1['user_phone'])) {
            $error['user_phone'] = 'Unvalid number';
        } else if ($user_object->edit_exist('users', 'user_phone', $data1['user_phone'], 'user_id', $data1['user_id'])) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['user_phone'] = 'Phone number is already exist!';
        }

//        $password = input_post('password');
//        $confirm_password = input_post('confirm_password');
//        if (isset($password)) {
//            if (strlen($password) < 8) {
//                return $error['user_password'] = "Password is at least 8 character!";
//            }
//            if (isset($confirm_password)) {
//                if ($password != $confirm_password) {
//                    return $error['user_confirm_password'] = "Confirm your password again!";
//                } else {
//                    $data['user_password'] = md5($password);
//                }
//            } else {
//                return $error['user_confirm_password'] = "You have to enter your confirm password!";
//            }
//        } else {
//            return $error['user_password'] = "You have to enter your password!";
//        }


        if (empty($error)) {
            $flag = $user_object->update('users', $data1, 'user_id', $data1['user_id']);
            if ($flag) {
                echo '<script language="javascript">';
                echo 'alert("You have edited your profile successfully");';
                echo 'window.location.assign("index.php?action=user");';
                echo '</script>';
                die();
            } else {
                $error['update'] = 'can not update your profile';
            }
        }
    }
}

if ($action == 'user_change_pass') { /* --------------------------------------cai nay la phan them ban nhe-------- */
    if (isset($_POST['submit'])) {
        $old_password = input_post('old_password');
        if (NULL !== $old_password) {
            if ($old_password != '00000000') {
                $error['old_password'] = 'Password is wrong!';
            }
        }


        $password = input_post('password');
        $confirm_password = input_post('confirm_password');
        if (isset($password)) {
            if (strlen($password) < 8) {
                $error['user_password'] = "Password is at least 8 character!";
            }
            if (isset($confirm_password)) {
                if ($password != $confirm_password) {
                    $error['user_confirm_password'] = "Confirm your password again!";
                } else {
                    $data1['user_password'] = md5($password);
                }
            } else {
                $error['user_confirm_password'] = "You have to enter your confirm password!";
            }
        } else {
            $error['user_password'] = "You have to enter your password!";
        }


        if (empty($error)) {
            $flag = $user_object->update('users', $data1, 'user_id', 7);
            if ($flag) {
                echo '<script language="javascript">';
                echo 'alert("You have changed password successfully");';
                echo 'window.location.assign("index.php?action=user");';
                echo '</script>';
                die();
            } else {
                $error['update'] = 'can not update your profile';
            }
        } else {
            $error['update'] = 'There are misstakes in your process, please try again!';
        }
    }
}