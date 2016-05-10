<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'public/site/';
?>
<?php
require_once 'site/db/db_read.php';
$news_slug = input_get('slug');
$current_news = $data->get_row("SELECT * FROM news_users WHERE news_slug = '" . $news_slug . "'");

if ($current_news == null) {
    $current_news = $data->get_row("SELECT * FROM news WHERE news_slug = '" . $news_slug . "'");
    $table = 'news';
} else {
    $table = 'news_users';
}

setViewed($current_news['news_viewed'], $table, $current_news['news_id'], $data);
//unset($_SESSION['count_viewed']);
//if(!isset($_SESSION['count_viewed'])){
//    echo 'Da huy Session';
//}
?>
<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-8 col-sm-12 content_left">
        <span class="title">
            <?php
            echo $current_news['news_title'];
            unset($current_news['news_title']);
            ?>
        </span>
        <i class="date">15th Jan 2016</i>
        <hr>
        <div class="social">
            <a href="#"><img src="<?php echo $pathforsite; ?>images/s_facebook.png"></a><br>
            <a href="#"><img src="<?php echo $pathforsite; ?>images/s_twitter.png"></a><br>
            <a href="#"><img src="<?php echo $pathforsite; ?>images/s_google.png"></a><br>
            <a href="#"><img src="<?php echo $pathforsite; ?>images/s_in.png"></a><br>
            <a href="#"><img src="<?php echo $pathforsite; ?>images/s_pet.png"></a><br>
        </div>
        <div class="read">
            <img src="<?php echo $current_news['news_image']; ?>" width="60%">
            <p><?php echo $current_news['news_content']; ?></p>
            <div class="clr"></div>
        </div>
        <div class="col-md-12 relate">
            <span>Relate</span>
            <ul class="list">
                <?php
                $cate_id = $current_news['cate_id'];
                $i = 0;
                $relate_news = $data->get_list("SELECT * FROM news WHERE cate_id = " . $cate_id . " ORDER BY news_viewed DESC");
                foreach ($relate_news as $value) {
                    if ($i == 6) {
                        break;
                    }
                    ?>
                    <li><a href="index.php?action=read&slug=<?php echo $value['news_slug']; ?>"><?php
                            if (is_array($value)) {
                                echo $value["news_title"];
                            }
                            ?></a></li>

                    <?php
                    $i++;
                }
                ?>
                <!--                <li><a href="#">Stalled India-Pakistan talks to figure in Sharif-Obama meeting</a></li>-->

            </ul>
            <div class="row line_relate">

                <?php
                $i = 0;

                foreach ($relate_news as $value) {
                    if ($i == 14) {
                        break;
                    }
                    if ($i < 6) {
                        
                    } else {
                        ?>
                        <div class="col-md-3 col-sm-3 col-xs-6 item">
                            <img src="<?php echo $value['news_image']; ?>">
                            <span><a href="index.php?action=read&slug=<?php echo $value['news_slug']; ?>"><?php
                                    if (strlen($value['news_title']) > 38) {
                                        echo substr($value['news_title'], 0, 38);
                                    } else {
                                        echo $value['news_title'];
                                    }
                                    ?> ...</a></span>
                        </div>

                        <?php
                    }

                    $i++;
                }
                ?>




                <!--                <div class="col-md-3  col-sm-3 col-xs-6 item">
                                    <img src="images/img_27.jpg">
                                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                                </div>-->

                <div class="clr"></div>
            </div>

        </div>
        <div class="clr"></div>

        <!-- Xu ly add comment -->
        <?php
        if (isset($_SESSION['ss_user_token'])) {
            $user = $data->get_row("SELECT * FROM users WHERE user_id = " . $_SESSION['ss_user_token']['user_id']);
            //Hien tai $user_image la mot mang, nen chung ta phao tach no ra
            $user_image = $user['user_avatar'];
            $user_name = $user['user_name'];
        }
        ?>
        <div class="col-md-12 comment">
            <span>Top comments</span>
            <form method="post" action="">
                <div class="row">
                    <?php if (isset($_SESSION['ss_user_token'])) { ?>
                        <div class="form-group">
                            <div class="col-md-2 col-sm-2 col-xs-3"><img src="<?php echo $user_image; ?>" class="img-rounded" height="50px" width="50px"><p class="name"><?php echo $user_name; ?></p></div>
                            <div class="col-md-10 col-sm-10 col-xs-9">
                                <input value="<?php echo $current_news['news_id']; ?>" name="news_id" type="hidden">
                                <textarea name="comment_content" placeholder="Add your comment...." required="You must enter your comment!" class="form-control" rows="4"></textarea>
                                <button name="comment_button" type="submit" class="btn btn-danger" style="width: 100%">Send</button>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-5"><p>You must login to comment &nbsp;&nbsp;<a href="#"  data-toggle="modal"  class="btn btn-danger" data-target="#myModal">Login</a></p></div>
                    <?php } ?>

                    <div class="clr"></div>
                </div>
            </form>
            <hr>

            <!-- Xu ly phan comment -->
            <?php
            require_once 'site/db/db_comment.php';
            $list_comment = $comment_object->get_list_comment($current_news['news_id']);
            ?>
            <div class="row list">
                <?php foreach ($list_comment as $comment): ?>
                    <?php $user_image = $data->get_row("SELECT user_avatar FROM users WHERE user_id = " . $comment['add_user_id']); ?>
                    <div class="col-md-1 col-sm-2 col-xs-3"><img src="<?php echo $user_image['user_avatar']; ?>" class="img-rounded" height="50px" width="50px"></div>
                    <div class="col-md-11 col-sm-10 col-xs-9">
                        <span><?php echo $comment['add_username']; ?></span><br>
                        <i>Date: <?php echo $comment['add_datetime']; ?></i>

                        <p><?php echo $comment['comment_content']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
    <div class="col-md-4 col-sm-12 content_right">
        <span class="cate">Newest news</span><div class="clr"></div>
        <hr>
        <div class="list_item">
            <?php
            $newest_news = $data->get_list("SELECT * FROM news WHERE cate_id = " . $cate_id . " ORDER BY created DESC");
            ?>
            <ul>
                <?php
                $i = 0;
                foreach ($newest_news as $value) {
                    if ($i == 3) {
                        break;
                    }
                    ?>
                    <li class="col-md-12 col-sm-4 col-xs-4">
                        <img src="<?php echo $value['news_image']; ?>">
                        <span><a href="index.php?action=read&slug=<?php echo $value['news_slug']; ?>"><?php
                                if (strlen($value['news_title']) > 48) {
                                    echo substr($value['news_title'], 0, 48);
                                } else {
                                    echo $value['news_title'];
                                }
                                ?> ...</a><br><i>&nbsp;&nbsp;&nbsp;Date: <?php echo $value['created']; ?></i></span>
                        <div class="clr"></div>
                    </li>

                    <?php
                    $i++;
                }
                ?>
                <!--                
                                <li class="col-md-12 col-sm-4 col-xs-4">
                                    <img src="images/most1.cms">
                                    <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                                    <div class="clr"></div>
                                </li> 3 lan-->


            </ul>
            <div class="clr"></div>

            <?php
            $i = 0;
            foreach ($newest_news as $value) {
                if ($i == 4) {
                    break;
                }
                if ($i > 1) {
                    ?>

                    <div class="col-md-12 col-sm-6 col-xs-6 item">
                        <span><a href="index.php?action=read&slug=<?php echo $value['news_slug']; ?>"><?php
                                if (strlen($value['news_title']) > 48) {
                                    echo substr($value['news_title'], 0, 48);
                                } else {
                                    echo $value['news_title'];
                                }
                                ?> ...</a>
                        </span>
                            <img src="<?php echo $value['news_image']; ?>">
                            <i>&nbsp;&nbsp;&nbsp;Date: <?php echo $value['created']; ?></i>
                    </div>

                    <?php
                }

                $i++;
            }
            ?>


            <!--            <div class="col-md-12 col-sm-6 col-xs-6 item">
                            <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a></span>
                            <img src="images/most4.jpg">
                            <i>&nbsp;&nbsp;&nbsp;Date: 20/12/2016</i>
                        </div>-->

            <div class="clr"></div>
            <ul>
<!--                <li  class="col-md-12 col-sm-4 col-xs-4">
                    <img src="images/most7.jpg">
                    <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                    <div class="clr"></div>
                </li>-->
                <?php
                $i = 0;
                foreach ($newest_news as $value) {
                    if ($i == 12) {
                        break;
                    }
                    if($i > 8){
                        ?>
                    <li class="col-md-12 col-sm-4 col-xs-4">
                        <img src="<?php echo $value['news_image']; ?>">
                        <span><a href="index.php?action=read&slug=<?php echo $value['news_slug']; ?>"><?php
                                if (strlen($value['news_title']) > 48) {
                                    echo substr($value['news_title'], 0, 48);
                                } else {
                                    echo $value['news_title'];
                                }
                                ?> ...</a><br><i>&nbsp;&nbsp;&nbsp;Date: <?php echo $value['created']; ?></i></span>
                        <div class="clr"></div>
                    </li>

                    <?php
                    }
                    
                    $i++;
                }
                ?>
            </ul>

        </div>


        <div class="web">
            <span class="cate last">from around the web</span><div class="clr"></div>
            <hr>
            <div class="list_item">
                <ul>
                    <li class="col-md-12 col-sm-4 col-xs-4">
                        <img src="<?php echo $pathforsite; ?>images/most1.cms">
                        <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                        <div class="clr"></div>
                    </li>
                    <li class="col-md-12 col-sm-4 col-xs-4">
                        <img src="<?php echo $pathforsite; ?>images/most2.jpg">
                        <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                        <div class="clr"></div>
                    </li>
                    <li class="col-md-12 col-sm-4 col-xs-4">
                        <img src="<?php echo $pathforsite; ?>images/most3.cms">
                        <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                        <div class="clr"></div>
                    </li>

                </ul>
            </div>
            <!-- Unit2 -->
<!--            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3363836821785389"
                 data-ad-slot="8979464152"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <script src="http://weather.webmart.net/e/91888417"></script>-->
        </div>

    </div>