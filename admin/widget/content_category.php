<?php
if (!defined('SYSPATH'))
    die('Request not found!');
require 'db/db_category.php';
$total_record = $cate_object->count('SELECT count(*) AS num_count FROM categories', 'num_count');
$current_page = input_get('page');
$page = page($total_record, 10, $current_page, 'admin/index.php?action=category&page={page}');
$cate_list = $cate_object->get_list2($page['start'], $page['limit']);
?>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> Category List</h3>
        </div>
        <div class="panel-body">
            <form action="#" method="post" enctype="multipart/form-data" id="form-category">
                <form>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 1px;" class="text-center">
                                    <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                                <td class="text-left">                    
                                    <a href="#" class="asc">Category Name</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Sort Order</a>
                                </td>
                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($cate_list as $cate): ?>
                                
                                <tr>
                                    <td class="text-center">                    
                                        <input type="checkbox" name="selected[]" value="33" />
                                    </td>
                                    <td class="text-left"><?php echo $cate['cate_title'];?></td>
                                    <td class="text-right"><?php echo $cate['cate_slug']; ?></td>
                                    <td class="text-right">
                                        <form method="post" action="admin/index.php?action=category_delete" class="form_cate">
                                            <input type="hidden" name="cate_id" value="<?php echo $cate['cate_id'];?>"> 
                                            <a href="admin/index.php?action=category_edit&id=<?php echo $cate['cate_id'];?>" data-toggle="tooltip" title="Edit" class="btn btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button  onclick="confirm('Are you sure?') ? $(this).submit() : false;" data-toggle="tooltip" title="Delete" class="btn btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        
                                        
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
                </ul></div><div class="col-sm-6 text-right">Showing 1 to <?php echo $page['limit'];?> of <?php echo $page['total_record'];?> (<?php echo $page['total_page'];?> Pages)</div>
<!--                    <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>
                <div class="col-sm-6 text-right">Showing 1 to 20 of 38 (2 Pages)</div>-->
            </div>
        </div>
    </div>
</div>
</div>