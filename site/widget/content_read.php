<?php if (!defined('SYSPATH')) die('Request not found!');
$pathforsite = 'http://localhost/worthtolive/public/site/'; ?>
<?php
$data = new process();
$news_slug = input_get('slug');
$current_news = $data->get_row("SELECT * FROM news_users WHERE news_slug = '".$news_slug."'");
if($current_news == null){
    $current_news = $data->get_row("SELECT * FROM news WHERE news_slug = '".$news_slug."'");
}
?>
<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-8 col-sm-12 content_left">
        <span class="title">
            <?php echo $current_news['news_title']; ?>
           
        </span><br>
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
            <p><?php echo $current_news['news_content'];?></p>
            <div class="clr"></div>
        </div>
        <div class="col-md-12 relate">
            <span>Relate</span>
            <ul class="list">
                <li><a href="#">Stalled India-Pakistan talks to figure in Sharif-Obama meeting</a></li>
                <li><a href="#">Pathankot attack: Pakistan acts on India 'leads', arrests some suspec...</a></li>
                <li><a href="#">US wants Pakistan to act fast against Pathankot attack perpetrators</a></li>
                <li><a href="#">Pathankot attack: Sushma meets ex-envoys to Pakistan</a></li>
                <li><a href="#">India-Pakistan talks have potential to benefit J&K, says PDP</a></li>
                <li><a href="#">Pathankot attack: Credible information that plot hatched in Pakistan,...</a></li>
            </ul>
            <div class="row line_relate">
                <div class="col-md-3  col-sm-3 col-xs-6 item">
                    <img src="<?php echo $pathforsite; ?>images/img_27.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 item">
                    <img src="<?php echo $pathforsite; ?>images/img_28.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 item">
                    <img src="<?php echo $pathforsite; ?>images/img_29.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  item">
                    <img src="<?php echo $pathforsite; ?>images/img_39.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3  col-sm-3 col-xs-6 item">
                    <img src="http://img.v3.news.zdn.vn/w660/Uploaded/nutmjz/2014_02_25/my3Untitled.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3  col-sm-3 col-xs-6 item">
                    <img src="<?php echo $pathforsite; ?>images/img_36.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3 col-sm-3  col-xs-6 item">
                    <img src="<?php echo $pathforsite; ?>images/img_35.jpg">
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="col-md-3  col-sm-3 col-xs-6 item">
                    <img src="<?php echo $pathforsite; ?>images/img_27.jpg"s>
                    <span><a href="#">Lorem ipsum dolor sit amet, consectetur</a></span>
                </div>
                <div class="clr"></div>
            </div>

        </div>
        <div class="clr"></div>
        <div class="col-md-12 comment">
            <span>3 comments</span>
            <form>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-2 col-sm-2 col-xs-3"><img src="<?php echo $pathforsite; ?>images/img_27.jpg" class="img-rounded" height="50px" width="50px"><p class="name">Duong kien</p></div>
                        <div class="col-md-10 col-sm-10 col-xs-9">
                            <textarea placeholder="Add your comment...." class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </form>
            <hr>
            <div class="row list">
                <div class="col-md-1 col-sm-2 col-xs-3"><img src="<?php echo $pathforsite; ?>images/img_27.jpg" class="img-rounded" height="50px" width="50px"></div>
                <div class="col-md-11 col-sm-10 col-xs-9">
                    <span>Duong kien</span><br>
                    <i>Date: 15/12/2016</i>
                    <p>Pathankot is a lesson for many: 1) Pak army and ISI - that they cannot play rogue indefinitely. 2) Pak Government - that it cannot continue to remain subdued by its military. 3) People of Pakistan - that they cannot sacrifice the future of their children by allowing terrorists and rogue military to run their country. 4) India - that there is no alternative to remaining firm against terror and random aggression at borders. 5) Remote world powers - that India understands their role in creating trouble ...</p>
                </div>
            </div>
            <div class="row list">
                <div class="col-md-1 col-sm-2 col-xs-3"><img src="<?php echo $pathforsite; ?>images/img_28.jpg" class="img-rounded" height="50px" width="50px"></div>
                <div class="col-md-11 col-sm-10 col-xs-9">
                    <span>Duong kien</span><br>
                    <i>Date: 15/12/2016</i>
                    <p>Pathankot is a lesson for many: 1) Pak army and ISI - that they cannot play rogue indefinitely. 2) Pak Government - that it cannot continue to remain subdued by its military. 3) People of Pakistan - that they cannot sacrifice the future of their children by allowing terrorists and rogue military to run their country. 4) India - that there is no alternative to remaining firm against terror and random aggression at borders. 5) Remote world powers - that India understands their role in creating trouble ...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 content_right">
        <span class="cate">Newest news</span><div class="clr"></div>
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
            <div class="clr"></div>
            <div class="col-md-12 col-sm-6 col-xs-6 item">
                <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a></span>
                <img src="<?php echo $pathforsite; ?>images/most4.jpg">
                <i>&nbsp;&nbsp;&nbsp;Date: 20/12/2016</i>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-6 item">
                <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a></span>
                <img src="<?php echo $pathforsite; ?>images/most5.jpg">
                <i>&nbsp;&nbsp;&nbsp;Date: 20/12/2016</i>
            </div>
            <div class="clr"></div>
            <ul>
                <li  class="col-md-12 col-sm-4 col-xs-4">
                    <img src="<?php echo $pathforsite; ?>images/most7.jpg">
                    <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                    <div class="clr"></div>
                </li>
                <li  class="col-md-12 col-sm-4 col-xs-4">
                    <img src="<?php echo $pathforsite; ?>images/most8.jpg">
                    <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                    <div class="clr"></div>
                </li>
                <li  class="col-md-12 col-sm-4 col-xs-4">
                    <img src="<?php echo $pathforsite; ?>images/most9.jpg">
                    <span><a href="#">Bajirao, Mastani triumph, Bhansali rules at Filmfare</a><br><i>&nbsp;&nbsp;&nbsp;Date: 12/31/2016</i></span>
                    <div class="clr"></div>
                </li>

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