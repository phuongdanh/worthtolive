<?php
require SYSPATH.'validate.php';
$error = array();
require 'db/db_category.php';


?>


    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Category</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">
                            <input value="Category_add" name="type_action" type="hidden">
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-name1">Category title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cate_title" value="" placeholder="Category title" class="form-control" />
                                            <?php 
                                                echo $valid->show_error($error,'cate_title');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-description1">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="cate_des" placeholder="Description" id="input-description1" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-meta-title1">Slug</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cate_slug" value="" placeholder="Meta Tag Title" id="input-meta-title1" class="form-control" />
                                             <?php 
                                                echo $valid->show_error($error,'cate_slug');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-meta-description1">Keywords</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cate_keyword" value="" placeholder="Meta Tag Title" id="input-meta-title1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-meta-keyword1">Robots</label>
                                        <div class="col-sm-10">
                                            <textarea name="cate_robot" rows="5" placeholder="Meta Tag Keywords" id="input-meta-keyword1" class="form-control"></textarea>
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
    <script type="text/javascript"><!--
  $('#input-description1').summernote({
            height: 300
        });
  //--></script> 
    <script type="text/javascript"><!--
        $('input[name=\'path\']').autocomplete({
            'source': function (request, response) {
                $.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            category_id: 0,
                            name: ' --- None --- '
                        });

                        response($.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['category_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                $('input[name=\'path\']').val(item['label']);
                $('input[name=\'parent_id\']').val(item['value']);
            }
        });
  //--></script> 
    <script type="text/javascript"><!--
        $('input[name=\'filter\']').autocomplete({
            'source': function (request, response) {
                $.ajax({
                    url: 'index.php?route=catalog/filter/autocomplete&token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response($.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['filter_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                $('input[name=\'filter\']').val('');

                $('#category-filter' + item['value']).remove();

                $('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');
            }
        });

        $('#category-filter').delegate('.fa-minus-circle', 'click', function () {
            $(this).parent().remove();
        });
  //--></script> 
    <script type="text/javascript"><!--
        $('#language a:first').tab('show');
  //--></script></div>