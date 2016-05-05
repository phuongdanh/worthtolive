<?php
if (!defined('SYSPATH'))
    die('Request not found!');

class contact_cla extends process {

    function get_list2($start, $limit) {
        $contact_list = $this->get_list("SELECT * FROM contacts ORDER BY contact_status ASC, created DESC LIMIT $start, $limit");
        return $contact_list;
    }

}

$contact_object = new contact_cla();

$total_record = $contact_object->count('SELECT count(contact_id) AS num_count FROM contacts', 'num_count');
$current_page = input_get('page');
$page = page($total_record, 20, $current_page, 'admin/index.php?action=contact&page={page}');
$contact_list = $contact_object->get_list2($page['start'], $page['limit']);
?>
<?php
if (isset($_GET['contact_id'])) {
    $contact_id = input_get('contact_id');
    $data = array('contact_status' => 1,);
    $contact_object->update('contacts', $data, 'contact_id', $contact_id);
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin/index.php?action=contact\">";
}
?>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i>Contact list</h3>
        </div>
        <div class="panel-body">
            <form action="admin/index.php?action=contact_delete_multiple" method="post" enctype="multipart/form-data" id="form-contact">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 1px;" class="text-center">
                                    <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                                <td class="text-left">                    
                                    <a href="#" class="asc">Who</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Email</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Content</a>
                                </td>
                                <td class="text-right">                    
                                    <a href="#">Status</a>
                                </td>
                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($contact_list as $contact): ?>

                                <tr>
                                    <td class="text-center">                    
                                        <input type="checkbox" name="checkbox[]" value="<?php echo $contact['contact_id']; ?>" />
                                    </td>
                                    <td class="text-left"><?php echo $contact['contact_name']; ?></td>
                                    <td class="text-right"><?php echo $contact['contact_email']; ?></td>
                                    <td class="text-left"><?php echo $contact['contact_content']; ?></td>
                                    <td class="text-right"><?php
                                        if ($contact['contact_status'] == 0) {
                                            echo 'Not yet';
                                        } else {
                                            echo 'Seen';
                                        }
                                        ?></td>
                                    <td class="text-right">

                                        <a href="admin/index.php?action=contact&contact_id=<?php echo $contact['contact_id']; ?>" data-toggle="tooltip" title="Seen" class="btn btn-primary">
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