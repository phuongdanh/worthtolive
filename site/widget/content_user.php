<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'public/site/';
?>
<?php
$error = array();
$valid = new valid();
require_once 'site/db/db_user.php';
require_once 'site/db/db_news_users.php';

if(isset($_SESSION['ss_user_token'])){
    $news = $new_object->get_list("SELECT news_id, news_title, news_slug, cate_id, cate_title, cate_slug, created FROM news_users WHERE add_userid = " . $_SESSION['ss_user_token']['user_id']);
$categories = $new_object->get_list("SELECT cate_id, cate_title FROM categories");
$user = $user_object->get_row("SELECT * FROM users WHERE user_name = '" . $_SESSION['ss_user_token']['username'] . "'");
?>


<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-4 col-sm-4 content_left">
        <img src="<?php echo $user['user_avatar']; ?>" width="100%">
        <span><?php echo $user['user_name']; ?></span>
        <h6><?php echo $user['user_email']; ?></h6>
        <h6><?php echo $user['user_phone'];?></h6>
        
        <div class="action">
            <button class="btn btn-default" id="edit" title="edit profile"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-default" id="change_password">Change password</button>
            <button class="btn btn-default" title="Disaple account"><i class="fa fa-remove"></i></button>
        </div>
        <?php echo $valid->show_error($error, 'update'); ?>
        <div class="edit">
            <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                <input name="type_action" type="hidden" value="user_edit">
                <input name="id" value="<?php echo $user['user_id']; ?>" type="hidden">
                <input name="username" value="<?php echo $user['user_name']; ?>" type="text" class="form-control">
                <?php
                echo $valid->show_error($error, 'user_name');
                ?>
                <input name="email" value="<?php echo $user['user_email']; ?>" type="text" class="form-control">
                <?php
                echo $valid->show_error($error, 'user_email');
                ?>
                <input name="phone" value="<?php echo $user['user_phone']; ?>" type="text" class="form-control">
                <?php
                echo $valid->show_error($error, 'user_phone');
                ?>
                <input name="current_avatar" type="hidden" value="<?php echo $user['user_avatar']; ?>">
                <input class="form-control" type="file" name="new_avatar">
                <button class="btn btn-danger" type="submit" name="submit">Save</button>
            </form>
        </div>
        <div class="change_password">
            <form method="post" action="" class="form-horizontal">
                <input name="type_action" type="hidden"  value="user_change_pass">
                <input class="form-control" type="password" name="old_password" placeholder="Current password">

                <?php echo $valid->show_error($error, 'old_password'); ?>
                <input value="" class="form-control" type="password" name="password" placeholder="Your new password">
                <?php echo $valid->show_error($error, 'user_password'); ?>
                <input value="" class="form-control" name="confirm_password" type="password" placeholder="Confirm password">
                <?php echo $valid->show_error($error, 'user_confirm_password'); ?>
                <button class="btn btn-danger" id="change" name="submit">Save</button>
            </form>
        </div>
    </div>
    <div class="col-md-8 cl-sm-8 content_right">
        <div id="container">

            <ul class="tabs"> 
                <li class="active" rel="tab1"> My articles</li>
                <li rel="tab2">Add new article</li>
                <!--                <li rel="tab3"> Halo</li>
                                <li rel="tab4"> Portal</li>-->
            </ul>

            <div class="tab_container"> 

                <div id="tab1" class="tab_content"> 
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 0;
                                foreach ($news as $news) { 
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $news['news_title']; ?></td>
                                        <td><?php echo $news['cate_title']; ?></td>
                                        <td><?php echo $news['created']; ?></td>
                                        <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>

                    <div class="clr"></div>

                </div><!-- #tab1 -->

                <div id="tab2" class="tab_content"> 
                    <form class="form-horizontal" role="form" id="add_news_form" enctype="multipart/form-data" method="post">
                        <table class="table">
                            <tbody>
                            <input name="type_action" type="hidden" value="news_add">


                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">News title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="news_title" value="" placeholder="News title" class="form-control" />
                                            <?php
                                            echo $valid->show_error($error, 'news_title');
                                            ?>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="news_slug" value="" placeholder="News slug" class="form-control" />
                                            <?php
                                            echo $valid->show_error($error, 'news_slug');
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-name1">News content</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="news_content" value="" id="input-content" class="ckeditor"></textarea>
                                            <?php
                                            echo $valid->show_error($error, 'news_content');
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="col-sm-2 control-label">Images</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="news_image" value="" class="form-control"/>
                                        <?php
                                        echo $valid->show_error($error, 'news_image');
                                        ?>
                                    </div>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" name="news_des" placeholder="Description"  class="form-control"></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label">Category</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="cate_id">
                                                <?php foreach ($categories as $cate => $value): ?>
                                                    <option value="<?php echo $value['cate_id']; ?>"><?php echo $value['cate_title']; ?></option>
                                                    <?php
                                                endforeach;
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label">Keywords</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="news_keyword" value="" placeholder="News keywords" id="input-meta-title1" class="form-control" />
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group"> 
                                        <div class="col-md-2"></div>
                                        <div class="col-sm-10">
                                            <button name="save" type="submit" value="submit" class="btn btn-danger">Save</button>
                                            <button name="reset" type="reset" value="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </form>
                </div><!-- #tab2 -->

                <!--                <div id="tab3" class="tab_content"> 
                
                                    <p><img src="images/halo.jpg"> <br />
                                        <strong>
                                            Halo: Reach is the culmination of the superlative combat, sensational
                                            multiplayer, and seamless online integration that are the hallmarks
                                            of this superb series.
                                        </strong>
                                    </p>
                
                                </div> #tab3 
                
                                <div id="tab4" class="tab_content"> 
                
                                    <p><img src="images/portal.jpg"> <br />
                                        <strong>
                                            Portal 2 is an action shooter game from Valve Software that draws 
                                            from the original formula of innovative gameplay, story, and music,
                                            which earned the original Portal more than 70 industry accolades.
                                        </strong>
                                    </p>
                
                                </div> #tab4  -->

            </div> <!-- .tab_container --> 

        </div> <!-- #container -->
    </div>
    <div class="clr"></div>
</div>
<?php 
}else{
   echo  "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?action=home\">";
}
?>