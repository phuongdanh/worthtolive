
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Gán session (SET)
function session_set($key, $val) {
    $_SESSION[$key] = $val;
}

// Lấy session (GET)
function session_get($key) {
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }
    return false;
}

// Xóa session (DELETE)
function session_delete($key) {
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}

// Hàm thiết lập là đã đăng nhập
function set_logged($username, $level) {
    session_set('ss_user_token', array(
        'username' => $username,
        'level' => $level
    ));
}

// Hàm thiết lập đăng xuất
function set_logout($key) {
    session_delete($key);
}

// Hàm kiểm tra trạng thái người dùng đã đăng hập chưa
function is_logged() {
    $user = session_get('ss_user_token');
    return $user;
}

// Hàm kiểm tra có phải là admin hay không
function is_admin() {
    $user = is_logged();
    if (!empty($user['level']) && $user['level'] == '1') {
        return true;
    }
    return false;
}





