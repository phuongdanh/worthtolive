<?php if(!defined('SYSPATH'))die ('Request not found!');
require 'db/db_category.php';
 
 $current_page = input_get('page');
 $page = page($total_record,2,$current_page,'admin/index.php?action=category&page={page}');
 $cate_list = $cate_object->get_list2($page['start'],$page['limit']);

?>

    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Category List</h3>
            </div>
            <div class="panel-body">
                <form action="#" method="post" enctype="multipart/form-data" id="form-category">
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
                                
                               <?php
                                foreach($cate_list as $cate): ?>
                                 <tr>
                                    <td class="text-center">                    
                                        <input type="checkbox" name="selected[]" value="33" />
                                    </td>
                                    <td class="text-left"><?php echo $cate['cate_title'];?></td>
                                    <td class="text-right"><?php echo $cate['cate_slug'];?></td>
                                    <td class="text-right">
                                        <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-primary">
                                            <i class="fa fa-pencil"></i>
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
<!--                    <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>
                    <div class="col-sm-6 text-right">Showing 1 to 20 of 38 (2 Pages)</div>-->
                </div>
            </div>
        </div>
    </div>
</div>