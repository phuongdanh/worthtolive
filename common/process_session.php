
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    $error = array();

    // Kiểm tra tên đăng nhập
    if (isset($_POST['login'])) {
    // lấy tên đăng nhập và mật khẩu
    $username = input_post('username');
    $password = input_post('password');

    // Kiểm tra tên đăng nhập
    if (empty($username)) {
        $error['username'] = 'You have not entered username yet!';
    }

    // Kiểm tra mật khẩu
    if (empty($password)) {
        $error['password'] = 'You have not entered password yet!';
    }

    
    // Nếu không có lỗi
    if (!$error) {
        // include file xử lý database user
        // lấy thông tin user theo username
        $user = $data->db_user_get_by_username($username);

        // Nếu không có kết quả
        if (empty($user)) {
            $error['username'] = 'User is not exist!';
            }
        // nếu có kết quả nhưng sai mật khẩu
        else if ($user['user_password'] != md5($password)) {
            $error['password'] = 'Password not match!';
        }

        // nếu mọi thứ ok thì tức là đăng nhập thành công 
        // nên thực hiện redirect sang trang chủ
        if (!$error) {
            set_logged($user['user_name'], $user['user_level']);
            $_SESSION['ss_user_token']['user_id'] = $user['user_id'];
            //redirect(base_url('admin/?m=common&a=dashboard'));
            $url = $_SESSION['url'];
            unset($_SESSION['url']);
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=".$url."\">";
        }
    }
}
?>
