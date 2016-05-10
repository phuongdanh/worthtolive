<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'public/site/';
$data = new process();
$my_news = $data->get_list("SELECT news_id, news_title, news_slug, news_image FROM news_users ORDER BY created DESC");
$slide_news = $data->get_list("SELECT news_id, news_description, news_title,cate_title, news_slug, news_image FROM news ORDER BY created DESC");
?>
<div class="clr"></div>
<div class="slider_wrapper">
    <div class="slider_left">
        <div class="clr"></div>
        <div id="jssor_1" class = "jssor_1">
            <div data-u="slides" class="frame">
                <?php
                $i = 0;
                $j = 0;
                foreach ($slide_news as $value) {
                    if ($j == 5) {
                        break;
                    }if ($i % 3 == 0) {
                        ?>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo $value['news_image']; ?>" />
                            <a href="index.php?action=read&slug=<?php echo $value['news_slug'];?>"><span><?php echo substr($value['news_description'], 0, 88); ?> ...</span></a>
                            <div data-u="thumb">
                                <img class="i" src="<?php echo $value['news_image']; ?>" />
                                <div class="t"><?php echo $value['cate_title']; ?></div>
                                <a href="#"><div class="c"><?php echo substr($value['news_title'], 0, 34); ?> ...</div></a>
                            </div>
                        </div>
                        <?php
                        $j++;
                    }
                    $i++;
                    
                }
                ?>
                <!--                
                                <div data-p="112.50" style="display: none;">
                                    <img data-u="image" src="<?php echo $pathforsite; ?>images/002.jpg" />
                                    <span>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </span>
                                    <div data-u="thumb">
                                        <img class="i" src="<?php echo $pathforsite; ?>images/thumb-002.jpg" />
                                        <div class="t">Banner Rotator</div>
                                        <a href="#"><div class="c">360+ touch swipe slideshow effects</div></a>
                                    </div>
                                </div>5 slide-->

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

    <!-- Xu ly toi viet-->
    <div class="slider_right">
        <?php $i = 0; ?>
        <?php foreach ($my_news as $news) { ?>
        <?php if($i == 4){ break; }?>
            <div class="item">
                <a href="index.php?action=read&slug=<?php echo $news['news_slug']; ?>">
                    <img src="<?php echo $news['news_image']; ?>" width="68px" height="46px">
                    <span><?php echo substr($news['news_title'], 0,38); ?></span>
                </a>
            </div>
        <?php $i++; } ?>


        <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
    </div>
    <div class="clr"></div>
</div>
<div class="clr"></div>
<div class="content_wrapper">
    <div class="container container_custom">
        <div class="row">
            <div class="col-md-6 col-sm-12 content_left">
                <!-- Xu ly From the world -->
                <article>
                    <span class="cate">from around the world</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="row items">

                        <?php
                        $around_world = $data->get_list("SELECT news_id, news_title, news_slug,news_description, news_image FROM news WHERE cate_id = 1 ORDER BY created DESC");
                        $i = 1;
                        foreach ($around_world as $around_world) {
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="<?php echo $around_world['news_image']; ?>">
                                <span><?php
                                    if (strlen($around_world['news_title']) > 38) {
                                        echo substr($around_world['news_title'], 0, 38);
                                    } else {
                                        echo $around_world['news_title'];
                                    }
                                    ?></span>
                                <p><?php echo substr($around_world['news_description'], 0, 133) ?></p>
                                <a href="index.php?action=read&slug=<?php echo $around_world['news_slug']; ?>">READ MORE</a>
                            </div>
                            <?php
                            $i++;
                            if ($i == 4) {
                                break;
                            }
                        }
                        ?>
                        <!--                        <div class="col-md-4 col-sm-4">
                                                    <img src="<?php //echo $pathforsite;        ?>images/img_10.jpg">
                                                    <span>Lorem ipsum dolor sit amet, consectetur</span>
                                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                                                    <a href="#">READ MORE</a>
                                                </div>-->
                    </div>
                </article>
                <article>
                    <!--Xu ly nhung bai viet moi nhat -->
                    <span class="cate">latest article</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="row items">
                        <?php
                        $latest = $data->get_list("SELECT news_id, news_title, news_slug,news_description, news_image FROM news ORDER BY created DESC");
                        $i = 1;
                        foreach ($latest as $latest) {
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="<?php echo $latest['news_image']; ?>">
                                <span><?php
                                    if (strlen($latest['news_title']) > 38) {
                                        echo substr($latest['news_title'], 0, 38);
                                    } else {
                                        echo $latest['news_title'];
                                    }
                                    ?></span>
                                <p><?php echo substr($latest['news_description'], 0, 133) ?></p>
                                <a href="index.php?action=read&slug=<?php echo $latest['news_slug']; ?>">READ MORE</a>
                            </div>
                            <?php
                            $i++;
                            if ($i == 4) {
                                break;
                            }
                        }
                        ?>

                    </div>
                </article>
                <div class="clr"></div>
                <article>
                    <span class="cate">gallery</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="clr"></div>
                    <div class="items gallery">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_27.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_28.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_29.jpg"></a>
                        </div>
                        <div class="clr"></div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_39.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_35.jpg"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="<?php echo $pathforsite; ?>images/img_36.jpg"></a>
                        </div>
                    </div>
                </article>
                <article>
                    <!-- cac bai viet ve cong nghe -->
                    <span class="cate">tech news</span>
                    <a href="#"><img src="<?php echo $pathforsite; ?>images/more.png"></a>
                    <hr>
                    <div class="clr"></div>
                    <div class="tech">
                        <?php
                        $techs = $data->get_list("SELECT news_id, news_title,add_userid, news_slug,news_description, news_image FROM news WHERE cate_id = 2 ORDER BY created DESC");
                        $i = 0;
                        foreach ($techs as $tech) {
                            $i++;
                            ?>
                            <div class="col-md-6  col-sm-6 col-xs-12 news">
                                <a href="index.php?action=read&slug=<?php echo $latest['news_slug']; ?>">
                                    <span><?php
                                        if (strlen($tech['news_title']) > 38) {
                                            echo substr($tech['news_title'], 0, 38);
                                        } else {
                                            echo $tech['news_title'];
                                        }
                                        ?>
                                    </span>
                                </a>
                                <p><?php
                                    if (strlen($tech['news_description']) > 85) {
                                        echo substr($tech['news_description'], 0, 88);
                                    } else {
                                        echo $tech['news_description'];
                                    }
                                    if ($tech['news_description'] == '') {
                                        echo 'Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...';
                                    }

                                    if ($tech['add_userid'] == 0) {
                                        $user = 'Admin';
                                    } else {
                                        $result = $data->get_row("SELECT user_name FROM users WHERE user_id = " . $tech['add_userid']);
                                        $user = $result['user_name'];
                                    }
                                    $number_comments = $data->count2('SELECT count(comment_id) FROM comments WHERE news_id = ' . $tech['news_id']);
                                    ?>
                                    <br>by <a><?php echo $user; ?></a> | <?php echo $number_comments; ?> comments</p>
                                <hr>
                            </div>
                            <?php
                            if ($i == 4) {
                                break;
                            }
                        }
                        ?>
                        <!--    <div class="col-md-6 col-sm-6 col-xs-12  news">
                            <span>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</span>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...<br>by <a>Jonh Doe</a> | 29 comments</p>
                            <hr>
                        </div>-->

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


                        <form action="" method="post">
                            <input class="form-control" name="username" type="text" placeholder="Name">

                            <input class="form-control" name="password"type="text" placeholder="Email address">

                            <button name="login">SUBMIT</button>

                        </form>
                        <a href="#">We do not spam. We value your privacy!</a>
                    </div>
                    <div class="col-md-12 popular">
                        <!-- Xu ly tin tuc duoc doc nhieu nhat -->
                        <span class="cate">popular</span>
                        <span class="cate2">most read</span><br>
                        <hr>
                        <div class="row">
                            <?php
                            $most_read = $data->get_list("SELECT news_id, news_title,add_userid, news_slug,news_description, news_image, news_viewed, created FROM news ORDER BY news_viewed DESC");
                            $i = 0;
                            foreach ($most_read as $most_read) {
                                ?>
                                <div class="col-md-12 col-sm-6 item">
                                    <i><?php echo $most_read['created']; ?></i><br>
                                    <span><?php
                                        if (strlen($most_read['news_title']) > 38) {
                                            echo substr($most_read['news_title'], 0, 55) . '...';
                                        } else {
                                            echo $most_read['news_title'];
                                        }
                                        ?></span>
                                    <a href="index.php?action=read&slug=<?php echo $most_read['news_slug']; ?>">READ MORE</a>
                                    <br><i><?php echo $most_read['news_viewed'] . ' view'; ?></i>
                                    <hr>
                                </div>
                                <?php
                                $i++;
                                if ($i == 5) {
                                    break;
                                }
                            }
                            ?>
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