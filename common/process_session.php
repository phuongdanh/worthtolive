<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'system/session.php'; 


$error = array();
 
// BƯỚC 1: KIỂM TRA NẾU LÀ ADMIN THÌ REDIRECT
//if (is_admin()){
//    redirect(base_url('admin/?m=common&a=dashboard'));
//}
 
// BƯỚC 2: NẾU NGƯỜI DÙNG SUBMIT FORM
if (isset($_POST['login']))
{    
    // lấy tên đăng nhập và mật khẩu
    $username = input_post('username');
    $password = input_post('password');
     
    // Kiểm tra tên đăng nhập
    if (empty($username)){
        $error['user_name'] = 'Bạn chưa nhập tên đăng nhập';
    }
     
    // Kiểm tra mật khẩu
    if (empty($password)){
        $error['password'] = 'Bạn chưa nhập mật khẩu';
    }
     
    // Nếu không có lỗi
    if (!$error)
    {
        // include file xử lý database user
        include_once('system/database.php');
         
        // lấy thông tin user theo username
        $user = db_user_get_by_username($username);
         
        // Nếu không có kết quả
        if (empty($user)){
            $error['username'] = 'Tên đăng nhập không đúng';
        }
        // nếu có kết quả nhưng sai mật khẩu
        else if ($user['password'] != md5($password)){
            $error['password'] = 'Mật khẩu bạn nhập không đúng';
        }
         
        // nếu mọi thứ ok thì tức là đăng nhập thành công 
        // nên thực hiện redirect sang trang chủ
        if (!$error){
            set_logged($user['username'], $user['level']);
            redirect(base_url('admin/?m=common&a=dashboard'));
        }
    }
}
 
?>