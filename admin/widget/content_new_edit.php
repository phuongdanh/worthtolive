<?php
require SYSPATH . 'validate.php';
$valid = new valid();
$error = array();
$news_id = input_get('id');
require 'db/db_new.php';
require 'db/db_category.php';
$cates = $cate_object->get_list("SELECT cate_id, cate_title FROM categories");
$data = $new_object->get_row('SELECT * FROM news WHERE news_id = '.$news_id);
?>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit News</h3>
        </div>
        <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data" id="form-news" class="form-horizontal">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-general">
                        <input value="new_edit" name="type_action" type="hidden">
                        <input value="<?php echo $data['news_id'];?>" name="news_id" type="hidden">
                        <div class="form-group required">
                            <label class="col-sm-2 control-label">News title</label>
                            <div class="col-sm-10">
                                <input type="text" name="news_title" value="<?php echo $data['news_title'];?>" placeholder="News title" class="form-control" />
                                <?php
                                echo $valid->show_error($error, 'news_title');
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" name="news_slug" value="<?php echo $data['news_slug'];?>" placeholder="News slug" class="form-control" />
                                <?php
                                echo $valid->show_error($error, 'news_slug');
                                ?>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name1">News content</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="news_content" value="" id="input-content" class="ckeditor"><?php echo $data['news_content'];?></textarea>
                                <?php
                                echo $valid->show_error($error, 'news_content');
                                ?>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label">Images</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="current_image" value="<?php echo $data['news_image'];?>">
                                <input type="file" name="news_image" value="" class="form-control"/>
                                <?php
                                    echo $valid->show_error($error, 'news_image');
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea rows="5" name="news_des" placeholder="Description" class="form-control"><?php echo $data['news_description'];?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Category</label>
                            <div class="col-md-10">
                                <select class="form-control" name="cate_id">
                                    <?php foreach ($cates as $cate => $value): ?>
                                        <option value="<?php echo $value['cate_id']; ?>"><?php echo $value['cate_title']; ?></option>
                                        <?php
                                    endforeach;
                                    ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" name="news_keyword" value="<?php echo $data['news_keywords'];?>" placeholder="News keywords" id="input-meta-title1" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Robots</label>
                            <div class="col-sm-10">
                                <textarea name="news_robot" rows="5" placeholder="News robots" id="input-meta-keyword1" class="form-control"><?php echo $data['news_robots'];?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-sm-10">
                                <button name="save" type="submit" value="submit" class="btn btn-danger">Save</button>
                                <button name="reset" type="reset" value="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
