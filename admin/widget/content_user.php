<?php
if (!defined('SYSPATH'))
    die('Request not found!');

class user_cla extends process {

    function get_list2($start, $limit) {
        $user_list = $this->get_list("SELECT * FROM users ORDER BY user_status ASC, add_date_time DESC LIMIT $start, $limit");
        return $user_list;
    }

}

$user_object = new user_cla();

$total_record = $user_object->count('SELECT count(user_id) AS num_count FROM users', 'num_count');
$current_page = input_get('page');
$page = page($total_record, 20, $current_page, 'admin/index.php?action=user&page={page}');
$user_list = $user_object->get_list2($page['start'], $page['limit']);
?>
<?php
if (isset($_GET['user_id'])) {
    $user_id = input_get('user_id');
    $data = array('user_status' => 1,);
    $user_object->update('users', $data, 'user_id', $user_id);
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin/index.php?action=user\">";
}
?>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i>User list</h3>
        </div>
        <div class="panel-body">
            <form action="admin/index.php?action=user_delete_multiple" method="post" enctype="multipart/form-data" id="form-user">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 1px;" class="text-center">
                                    <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                                <td class="text-left">                    
                                    <a href="#" class="asc">Username</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Email</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Phone number</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Status</a>
                                </td>
                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($user_list as $user): ?>

                                <tr>
                                    <td class="text-center">                    
                                        <input type="checkbox" name="checkbox[]" value="<?php echo $user['user_id']; ?>" />
                                    </td>
                                    <td class="text-left"><?php echo $user['user_name']; ?></td>
                                    <td class="text-right"><?php echo $user['user_email']; ?></td>
                                    <td class="text-left"><?php echo $user['user_phone']; ?></td>
                                    <td class="text-right"><?php
                                        if ($user['user_status'] == 0) {
                                            echo 'New user';
                                        } else {
                                            echo 'Seen';
                                        }
                                        ?></td>
                                    <td class="text-right">

                                        <a href="admin/index.php?action=user&user_id=<?php echo $user['user_id']; ?>" data-toggle="tooltip" title="Seen" class="btn btn-primary">
                                            <i class="fa fa-eye"></i>
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