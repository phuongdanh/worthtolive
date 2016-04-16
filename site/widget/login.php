<?php if (!defined('SYSPATH')) die('Request not found!'); ?>
<?php
$valid = new valid();
$error = array();

?>
<div class="clr"></div>
<div class="container dialog">

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    
                    <form action="" method="post">
                        
                        <input class="form-control" name="username" type="text" placeholder="Username">
                        <?php echo $valid->show_error($error, 'username') ?>
                        <input class="form-control" name="password" type="password" placeholder="Password">
                        <?php echo $valid->show_error($error, 'password') ?>
                        <button name="login" class="btn btn-warning">LOGIN</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>



