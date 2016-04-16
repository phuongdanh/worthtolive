<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'public/site/';
$data = new process();
$valid = new valid();
require 'common/process_session.php';
?>
<div class="clr"></div>
<div class="slider_wrapper">
    <div class="slider_left">
        <div class="clr"></div>
        <div id="jssor_1" class = "jssor_1">
            <div data-u="slides" class="frame">
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="<?php echo $pathforsite; ?>images/002.jpg" />
                    <span>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </span>
                    <div data-u="thumb">
                        <img class="i" src="<?php echo $pathforsite; ?>images/thumb-002.jpg" />
                        <div class="t">Banner Rotator</div>
                        <a href="#"><div class="c">360+ touch swipe slideshow effects</div></a>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="<?php echo $pathforsite; ?>images/003.jpg" />
                    <span>Lorem ipsum dolor sit amet, consectetur Nulla quis 
                        lorem neque, mattis venenatis lectus. </span>
                    <div data-u="thumb">
                        <img class="i" src="<?php echo $pathforsite; ?>images/thumb-003.jpg" />
                        <div class="t">Image Gallery</div>
                        <a href="#"><div class="c">Image gallery with thumbnail navigation</div></a>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="<?php echo $pathforsite; ?>images/004.jpg" />
                    <span>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </span>
                    <div data-u="thumb">
                        <img class="i" src="<?php echo $pathforsite; ?>images/thumb-004.jpg" />
                        <div class="t">Carousel</div>
                        <a href="#"><div class="c">Touch swipe, mobile device optimized</div></a>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="<?php echo $pathforsite; ?>images/005.jpg" />
                    <span>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </span>
                    <div data-u="thumb">
                        <img class="i" src="<?php echo $pathforsite; ?>images/thumb-005.jpg" />
                        <div class="t">Themes</div>
                        <a href="#"><div class="c">30+ professional themems + growing</div></a>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="<?php echo $pathforsite; ?>images/006.jpg" />
                    <span>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </span>
                    <div data-u="thumb">
                        <img class="i" src="<?php echo $pathforsite; ?>images/thumb-006.jpg" />
                        <div class="t">Tab Slider</div>
                        <a href="#"><div class="c">Tab slider with auto play options</div></a>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort11" style="" data-autocenter="2">
                <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p">
                        <div data-u="thumbnailtemplate" class="tp"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Arrow Navigator -->

        </div>
        <div class="breaking"><a href="#"><img src="<?php echo $pathforsite; ?>images/breaking.png"></a></div>
    </div>
    <div class="slider_right">
        <div class="item">
            <a href="#">
                <img src="<?php echo $pathforsite; ?>images/baomoi1.jpg" width="68px" height="46px">
                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
            </a>
        </div>
        <div class="item">
            <a href="#">
                <img src="<?php echo $pathforsite; ?>images/baomoi2.jpg" width="68px" height="46px">
                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
            </a>
        </div>
        <div class="item">
            <a href="#">
                <img src="<?php echo $pathforsite; ?>images/baomoi3.jpg" width="68px" height="46px">
                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="<?php echo $pathforsite; ?>images/baomoi4.jpg" width="68px" height="46px">
                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
            </a>
        </div>
        <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
    </div>
    <div class="clr"></div>
</div>
<div class="clr"></div>
<div class="content_wrapper">
    <div class="container container_custom">
        <div class="row">
            <div class="col-md-6 col-sm-12 content_left">
                <article>
                    <span class="cate">from   around   the   world</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="row items">
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $pathforsite; ?>images/img_06.jpg">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $pathforsite; ?>images/img_08.jpg">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $pathforsite; ?>images/img_10.jpg">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </article>
                <article>
                    <span class="cate">latest article</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="row items">
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $pathforsite; ?>images/img_16.jpg">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $pathforsite; ?>images/img_17.jpg">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $pathforsite; ?>images/img_18.jpg">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </article>
                <div class="clr"></div>
                <article>
                    <span class="cate">gallery</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="clr"></div>
                    <div class="items gallery">
                        <div class="col-md-4 col-sm-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_27.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_28.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_29.jpg"></a>
                        </div>
                        <div class="clr"></div>
                        <div class="col-md-4 col-sm-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_39.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_35.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_36.jpg"></a>
                        </div>
                    </div>
                </article>
                <article>
                    <span class="cate">tech news</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="clr"></div>
                    <div class="tech">
                        <div class="col-md-6  col-sm-6 col-xs-12 news">
                            <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...<br>by <a>Jonh Doe</a> | 29 comments</p>
                            <hr>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12  news">
                            <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...<br>by <a>Jonh Doe</a> | 29 comments</p>
                            <hr>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12  news">
                            <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...<br>by <a>Jonh Doe</a> | 29 comments</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 news">
                            <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...<br>by <a>Jonh Doe</a> | 29 comments</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-sm-12 content_right">
                <div class="col-md-5 content_r_l">
                    <article>
                        <span class="cate">from the desk</span>
                        <hr>
                        <div class="col-md-12 col-sm-4 item">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a><b>3 hours ago</b><br>
                            <img src="<?php echo $pathforsite; ?>images/line.png">
                        </div>
                        <div class="col-md-12 col-sm-4 item">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a><b>3 hours ago</b><br>
                            <img src="<?php echo $pathforsite; ?>images/line.png">
                        </div>
                        <div class="col-md-12 col-sm-4 item">
                            <span>Lorem ipsum dolor sit amet, consectetur</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a href="#">READ MORE</a><b>3 hours ago</b><br>
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                        </div>
                        <span class="cate">editorial</span>
                        <hr>
                        <div class="col-md-12 col-sm-6 item2">
                            <img src="<?php echo $pathforsite; ?>images/img_24.jpg" width="100%">
                            <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
                        </div>
                        <div class="col-md-12 col-sm-6 item2">
                            <img src="<?php echo $pathforsite; ?>images/img_31.jpg" width="100%">
                            <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
                        </div>
                        <div class="col-md-12 col-sm-6 item2">
                            <img src="<?php echo $pathforsite; ?>images/img_41.jpg" width="100%">
                            <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
                        </div>
                        <div class="col-md-12 col-sm-6 item2">
                            <img src="<?php echo $pathforsite; ?>images/img_46.jpg" width="100%">
                            <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-7 content_r_r">
                    <div class="col-md-12 ad">
                        <img src="<?php echo $pathforsite; ?>images/img_03.jpg" width="100%">
                    </div>
                    <!--                    <div class="col-md-12 login">
                                            <span>Sign  Up  for    Newsletter</span>
                                            <a href="#">Sign up to receive our free newsletters!</a>
                                            <form>
                                                <input class="form-control" type="text" placeholder="Name">
                                                <input class="form-control" type="text" placeholder="Email address">
                                                <button>SUBMIT</button>
                    
                                            </form>
                                            <a href="#">We do not spam. We value your privacy!</a>
                                        </div>-->



                    <div class="col-md-12 login">
                        <span>Sign  Up  for    Newsletter</span>
                        <a href="#">Sign up to receive our free newsletters!</a>

                        <?php
                        


                        if (isset($_SESSION['ss_user_token'])) {
                            echo 'Da dang nhap!';
                            var_dump($_SESSION['ss_user_token']);
                            echo '<a href="index.php?action=logout">Logout</a>';
                        } else {
                            echo 'Chua Dang nhap';
                        }
                        ?>
                        <form action="" method="post">
                            <input class="form-control" name="username" type="text" placeholder="Name">
                            <?php echo $valid->show_error($error, 'username') ?>
                            <input class="form-control" name="password"type="text" placeholder="Email address">
                            <?php echo $valid->show_error($error, 'password') ?>
                            <button name="login">SUBMIT</button>

                        </form>
                        <a href="#">We do not spam. We value your privacy!</a>
                    </div>
                    <div class="col-md-12 popular">
                        <span class="cate">popular</span>
                        <span class="cate2">most read</span><br>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-sm-6 item">
                                <i>Sept 24th 2011</i><br>
                                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </span>
                                <a href="#">READ MORE</a>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-6 item">
                                <i>Sept 24th 2011</i><br>
                                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </span>
                                <a href="#">READ MORE</a>
                                <hr>
                            </div>
                            <div class=" col-md-12 col-sm-6 item">
                                <i>Sept 24th 2011</i><br>
                                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </span>
                                <a href="#">READ MORE</a>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-6 item">
                                <i>Sept 24th 2011</i><br>
                                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </span>
                                <a href="#">READ MORE</a>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-6 item">
                                <i>Sept 24th 2011</i><br>
                                <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </span>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                        <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                        <div class="col-md-12 sale">
                            <img src="<?php echo $pathforsite; ?>images/img_47.jpg" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 content_ad">
                <img src="<?php echo $pathforsite; ?>images/img_52.jpg" class="img-responsive">
            </div>
        </div>
    </div>
</div>