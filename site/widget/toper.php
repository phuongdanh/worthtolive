<?php if (!defined('SYSPATH')) die('Request not found!');
$pathforsite = 'http://localhost/worthtolive/public/site/'; ?>

<body>
    <div class="container_wrapper">
        <header>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="<?php echo $pathforsite; ?>images/logo.png">
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 menu">
                    <ul>
                        <li><a href="index.php?action=home">Home</a></li>
                        <li><a href="index.php?action=about">About Us</a></li>
                        <li><a href="index.php?action=contact">Contact Us</a></li>
                        <li><a href="index.php?action=subcribe">Subcribe</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#myModal">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 search">
                    <div><a href="http://facebook.com/danhchutich/"><img src="<?php echo $pathforsite; ?>images/facebook.png"></a><a href="#"><img src="<?php echo $pathforsite; ?>images/twitter.png"></a><a href="#"><img src="<?php echo $pathforsite; ?>images/wifi.png"></a><a href="#"><img src="<?php echo $pathforsite; ?>images/like.jpg"><span>6</span></a><a href="#"><img src="<?php echo $pathforsite; ?>images/comment.jpg"><span>3</span></a></div>
                    <form class="form">
                        <button><i class="fa fa-search"></i></button>
                        <input class="" type="text">

                    </form>
                </div>
            </div>
        </header>