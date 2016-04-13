<?php
if (!defined('SYSPATH'))
    die('Request not found!');
$pathforsite = 'public/site/';
?>
<?php
$error = array();
$valid = new valid();
require_once 'site/db/db_user.php';
$user = $user_object->get_row('SELECT * FROM users WHERE user_id = 7');
?>


<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-4 col-sm-4 content_left">
        <img src="<?php echo $user['user_avatar']; ?>" width="100%">
        <span><?php echo $user['user_name']; ?></span>
        <h6><?php echo $user['user_email']; ?></h6>
        <h6><?php echo $user['user_phone']; ?></h6>
        <div class="action">
            <button class="btn btn-default"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-default">Change password</button>
            <button class="btn btn-default"><i class="fa fa-remove"></i></button>
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>cfhfduuuuuuuuuuuuuuuuuuuuuuuu uuuuuuuuuuuuuuuuuuuuuuuuuuj</td>
                                    <td>john@example.com</td>
                                    <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                    <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="clr"></div>
                    <div class="change_password">
                        <form method="post" action="" class="form-horizontal">
                            <input name="type_action" type="hidden"  value="user_change_pass">
                            <input class="form-control" type="password" name="old_password" placeholder="Current password">
                           
                            <?php echo $valid->show_error($error, 'old_password'); ?>
                            <input value="" class="form-control" type="password" name="password" placeholder="Your new password">
                            <?php echo $valid->show_error($error, 'user_password'); ?>
                            <input value="" class="form-control" name="confirm_password" type="password" placeholder="Confirm password">
                            <?php echo $valid->show_error($error, 'user_confirm_password'); ?>
                            <button class="btn btn-danger" type="submit" name="submit">Save</button>
                        </form>
                    </div>
                </div><!-- #tab1 -->

                <div id="tab2" class="tab_content"> 
                    <table class="table">
                        <tbody>
                        <form class="form-horizontal" role="form">
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Title:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Content:</label>
                                        <div class="col-sm-10">
                                            <textarea type="" class="form-control" id="content" placeholder="Tap to compose"></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Title:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Title:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </form>
                        </tbody>
                    </table>
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