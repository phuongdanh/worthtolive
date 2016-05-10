<?php
if (!defined('SYSPATH'))
    die('Request not found!');
require 'db/db_new.php'; 
$total_record = $new_object->count2('SELECT count(news_id) FROM news');
$current_page = input_get('page');
$page = page($total_record, 20, $current_page, 'admin/index.php?action=news&page={page}');
$new_list = $new_object->get_list2($page['start'], $page['limit']);
?>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i>News list</h3>
        </div>
        <div class="panel-body">
            <form action="admin/index.php?action=news_delete_multiple" method="post" enctype="multipart/form-data" id="form-news">
               
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 1px;" class="text-center">
                                    <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                                <td class="text-left">                    
                                    <a href="#" class="asc">News title</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Category</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Viewed</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Public date</a>
                                </td>
                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($new_list as $new): ?>

                                <tr>
                                    <td class="text-center">                    
                                        <input type="checkbox" name="checkbox[]" value="<?php echo $new['news_id']; ?>" />
                                    </td>
                                    <td class="text-left"><?php echo $new['news_title']; ?></td>
                                    <td class="text-right"><?php echo $new['cate_title']; ?></td>
                                    <td class="text-left"><?php echo $new['news_viewed']; ?></td>
                                    <td class="text-right"><?php echo $new['created']; ?></td>
                                    <td class="text-right">
                                        
                                            <a href="admin/index.php?action=news_edit&id=<?php echo $new['news_id']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="admin/index.php?action=news_delete&id=<?php echo $new['news_id']; ?>"  onclick="confirm('Are you sure?') ? $(this).submit() : false;" data-toggle="tooltip" title="Delete" class="btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                            </a>
                                    


                                    </td>
                                </tr>

                            <?php endforeach; ?>


                        </tbody>
                    </table>
                </div>
            </form>
            <div class="row">
                <?php
                echo $page['html'];
                ?>
                </ul></div><div class="col-sm-6 text-right">Showing 1 to <?php echo $page['limit']; ?> of <?php echo $page['total_record']; ?> (<?php echo $page['total_page']; ?> Pages)</div>
<!--                    <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>
                <div class="col-sm-6 text-right">Showing 1 to 20 of 38 (2 Pages)</div>-->
        </div>
    </div>
</div>
</div>
</div>