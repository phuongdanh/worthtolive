<?php if (!defined('SYSPATH')) die('Request not found!'); ?>
<?php
$valid = new valid();
$error = array();

// BƯỚC 1: KIỂM TRA NẾU LÀ ADMIN THÌ REDIRECT
// BƯỚC 2: NẾU NGƯỜI DÙNG SUBMIT FORM
if (isset($_POST['login'])) {
    // lấy tên đăng nhập và mật khẩu
    $username = input_post('username');
    $password = input_post('password');

    // Kiểm tra tên đăng nhập
    if (empty($username)) {
        $error['username'] = 'Bạn chưa nhập tên đăng nhập';
    }

    // Kiểm tra mật khẩu
    if (empty($password)) {
        $error['password'] = 'Bạn chưa nhập mật khẩu';
    }

    // Nếu không có lỗi
    if (!$error) {
        // include file xử lý database user
        include_once('site/db/db_user.php');

        // lấy thông tin user theo username
        $user = db_user_get_by_username($username);

        // Nếu không có kết quả
        if (empty($user)) {
            $error['username'] = 'Tên đăng nhập không đúng';
        }
        // nếu có kết quả nhưng sai mật khẩu
        else if ($user['user_password'] != md5($password)) {
            $error['password'] = 'Mật khẩu bạn nhập không đúng';
        }

        // nếu mọi thứ ok thì tức là đăng nhập thành công 
        // nên thực hiện redirect sang trang chủ
        if (!$error) {
            set_logged($user['username'], $user['level']);
            //redirect(base_url('admin/?m=common&a=dashboard'));
        }
    }
}
?>

<div class="clr"></div>
<div class="container dialog">

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <?php
                    if (isset($SESSION['ss_user_token'])) {
                        echo 'Da dang nhap';
                    } else {
                        echo "chua dang nhap!";
                    }
                    ?>
                    <form class="form-horizontal" method="post" action="">
                        <input class="form-control" name="username" type="text" placeholder="Username">
                        <?php $valid->show_error($error,'username'); ?>
                        <input class="form-control" name="password" type="text" placeholder="Password">
                        <?php $valid->show_error($error,'password'); ?>
                        <button class="btn btn-warning" name="login">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>