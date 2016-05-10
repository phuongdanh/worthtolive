<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'public/site/';
?>
<?php
require 'site/db/db_each_cate.php';
$most_read = $data->get_most('world');
$i_write = $data->get_list("SELECT * FROM news_users WHERE cate_id = 1");
?>
<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-6 content_left">
        <div class="first_art">
            <span><?php
                if (strlen($most_read[0]['news_title']) > 53) {
                    echo substr($most_read[0]['news_title'], 0, 53);
                } else {
                    echo $most_read[0]['news_title'];
                }
                ?>...</span><br/>
            <i><?php echo $most_read[0]['created']; ?></i>
            <img src="<?php echo $most_read[0]['news_image']; ?>" style="width:100%;margin-top:10px;margin-bottom:10px;">
            <p><?php
                if (isset($most_read[0]['news_description'])) {
                    echo $most_read[0]['news_description'];
                };
                ?>
            </p>
        </div>
        <ul class="list_art">
            <?php
            $i = -1;
            foreach ($most_read as $news) {
                $i++;
                if ($i == 0) {
                    continue;
                } elseif ($i == 7) {
                    break;
                }
                ?>
                <li>
                    <img src="<?php echo $news['news_image']; ?>">
                    <span><a href="#"><?php
                            if (strlen($news['news_title']) > 50) {
                                echo substr($news['news_title'], 0, 50);
                            } else {
                                echo $news['news_title'];
                            }
                            ?> ...</a></span><br/>
                    <i><?php echo $news['created']; ?></i>
                    <p><?php echo substr($news['news_content'], 0, 273); ?></p>
                </li>
                <?php
            }
            ?>
            <!--            <li>
                            <img src="<?php // echo $pathforsite;     ?>images/world2.jpg">
                            <span><a href="#">Senate G.O.P. Digs In for Fight Over Replacing Scalia</a></span><br/>
                            <i>20:35 16/06/2015</i>
                            <p>WASHINGTON — An epic Washington political battle took shape on Sunday after the death of Justice Antonin Scalia as Senate Republicans dug in and said they would refuse to act on any Supreme Court nomination by President Obama. But the White House vowed to select a nominee within weeks.
                            </p>
                        </li>-->

            <img src="<?php echo $pathforsite; ?>images/more.png">
        </ul>
    </div>
    <div class="col-md-2 content_mid">
        <ul class="list_art">
            <span>I write</span>
            <hr>
            <?php
            $i = 0;
            foreach ($i_write as $value) {
                if ($i == 5) {
                    break;
                }
                ?>
                <li>
                    <a href="index.php?action=read&slug=<?php echo $value['news_slug']; ?>">
                        <?php
                        if (strlen($value['news_title']) > 30) {
                            echo substr($value['news_title'], 0, 30);
                        } else {
                            echo $value['news_title'];
                        }
                        ?>...</a>
                </li>

                <?php $i++;
            } ?>
            <!--            <li>
                            <a href="#">Jet crash on the sky in Russia</a>
                        </li>4-->

            <img src="<?php echo $pathforsite; ?>images/more.png">
        </ul>
        <ul class="list_art img">
            <span>FRom web</span>
            <hr>
            <li>
                <img src="<?php echo $pathforsite; ?>images/world3.jpg">
                <span><a href="#">Obama move white house</a></span>
            </li>
            <li>
                <img src="<?php echo $pathforsite; ?>images/world3.jpg">
                <span><a href="#">Obama move white house</a></span>
            </li>
            <li>
                <img src="<?php echo $pathforsite; ?>images/world3.jpg">
                <span><a href="#">Obama move white house</a></span>
            </li>
            <li>
                <img src="<?php echo $pathforsite; ?>images/world3.jpg">
                <span><a href="#">Obama move white house</a></span>
            </li>
            <img src="<?php echo $pathforsite; ?>images/more.png">
        </ul>
        <ul class="list_art gall">
            <span>Gallery</span>
            <hr>
            <li>
                <a href="#">Jet crash on the sky in Russia</a>
                <p>The accident made Russia loses of up to 1 Milion USD. Economy decline</p>
            </li>
            <li>
                <a href="#">Jet crash on the sky in Russia</a>
                <p>The accident made Russia loses of up to 1 Milion USD. Economy decline</p>
            </li>
            <li>
                <a href="#">Jet crash on the sky in Russia</a>
                <p>The accident made Russia loses of up to 1 Milion USD. Economy decline</p>
            </li>
            <li>
                <a href="#">Jet crash on the sky in Russia</a>
                <p>The accident made Russia loses of up to 1 Milion USD. Economy decline</p>
            </li>
            <img src="<?php echo $pathforsite; ?>images/more.png">
        </ul>
    </div>
    <div class="col-md-4 content_right">
        <ul class="desk">
            <span class="cate">From the desk</span>
            <hr class="line_title">
            <li>
                <span>Lorem ipsum dolor sit amet, consectetur</span>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                <a href="#">READ MORE</a><b>3 hours ago</b><br>
            </li>
            <li>
                <span>Lorem ipsum dolor sit amet, consectetur</span>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                <a href="#">READ MORE</a><b>3 hours ago</b><br>
            </li>
            <li>
                <span>Lorem ipsum dolor sit amet, consectetur</span>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                <a href="#">READ MORE</a><b>3 hours ago</b><br>
            </li>
            <li>
                <span>Lorem ipsum dolor sit amet, consectetur</span>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                <a href="#">READ MORE</a><b>3 hours ago</b><br>
            </li>
            <img src="<?php echo $pathforsite; ?>images/more.png">
        </ul>
        <ul class="edit">
            <span class="cate">EDITORIAL</span>
            <hr class="line_title">
            <li class="col-md-12 col-sm-6">
                <img src="<?php echo $pathforsite; ?>images/img_24.jpg" width="100%">
                <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
            </li>
            <li class="col-md-12 col-sm-6">
                <img src="<?php echo $pathforsite; ?>images/img_31.jpg" width="100%">
                <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
            </li>
            <li class="col-md-12 col-sm-6">
                <img src="<?php echo $pathforsite; ?>images/img_41.jpg" width="100%">
                <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
            </li>
            <li class="col-md-12 col-sm-6">
                <img src="<?php echo $pathforsite; ?>images/img_46.jpg" width="100%">
                <a href="#"><span class="title">Lorem ipsum dolor sit amet, consectetur</span></a>
            </li>
            <img src="<?php echo $pathforsite; ?>images/more.png">
        </ul>
    </div>
    <div class="clr"></div>
</div>