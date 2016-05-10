
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>

        <meta charset="UTF-8" />
        <title>Admin - Worthtolive</title>
        <base href="http://localhost/worthtolive/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <script type="text/javascript" src="public/admin/javascript/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="public/admin/javascript/bootstrap/js/bootstrap.min.js"></script>
        <link href="public/admin/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="public/admin/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="public/admin/javascript/summernote/summernote.css" rel="stylesheet" />
        <script type="text/javascript" src="public/admin/javascript/summernote/summernote.js"></script>
        <script src="public/admin/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
        <script src="public/admin/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <link href="public/admin/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
        <link type="text/css" href="public/admin/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
        <script src="public/admin/javascript/common.js" type="text/javascript"></script>
        <script src="public/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="public/ckeditor/sample.js" type="text/javascript"></script>
    </head>
    <body>
        <?php require 'db/for_admin.php'; ?>
        <?php $object_new_things = new object_new(); ?>
        <div id="container">
            <header id="header" class="navbar navbar-static-top">
                <div class="navbar-header">
                    <a type="button" id="button-menu" class="pull-left"><i class="fa fa-indent fa-lg"></i></a>
                    <a href="" class="navbar-brand"><img src="public/admin/image/logo.png" alt="OpenCart" title="OpenCart" /></a></div>
                <ul class="nav pull-right">
                    <?php
                    $number_new_users = $object_new_things->count2('SELECT * FROM users WHERE user_status = 0');
                    ?>
                    <?php
                    $number_new_contacts = $object_new_things->count2('SELECT * FROM contacts WHERE contact_status = 0');
                    $total_new = $number_new_users + $number_new_contacts;
                    ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger pull-left"><?php echo $total_new; ?></span> <i class="fa fa-bell fa-lg"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right alerts-dropdown">

                            <li><a href="admin/index.php?action=user"><span class="label label-success pull-right"><?php echo $number_new_users; ?></span>New users</a></li>

                            <li><a href="admin/index.php?action=contact"><span class="label label-danger pull-right"><?php echo $number_new_contacts; ?></span>New contacts</a></li>
                            <li><a href=""><span class="label label-danger pull-right">0</span>Pending approval</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-life-ring fa-lg"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Stores <i class="fa fa-shopping-cart"></i></li>
                            <li><a href="http://localhost/opencart/upload/" target="_blank">Your Store</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Help <i class="fa fa-life-ring"></i></li>
                            <li><a href="http://www.opencart.com" target="_blank">Homepage</a></li>
                            <li><a href="http://docs.opencart.com" target="_blank">Documentation</a></li>
                            <li><a href="http://forum.opencart.com" target="_blank">Support Forum</a></li>
                        </ul>
                    </li>
                    <li>

                        <?php $_SESSION['url'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                        <a href="common/logout.php"><span class="hidden-xs hidden-sm hidden-md">Logout</span> <i class="fa fa-sign-out fa-lg"></i></a>

                    </li>   
                </ul>
            </header>