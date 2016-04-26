<?php if (!defined('SYSPATH')) die('Request not found!'); 
require 'site/db/db_category.php';
$data_cate = $cate_object->get_list("SELECT cate_id, cate_title, cate_slug FROM categories ORDER BY cate_id");
?>
<section>
    <div class="navbar-icon">
        <span>MENU <i class="fa fa-bars"></i></span>
    </div>
    <nav class="main_menu">
        <div class="menu" id="main_menu">
            <ul class="list-inline ul_menu">
                <?php foreach ($data_cate as $data_cate):?>
                <li><a href="index.php?action=<?php echo $data_cate['cate_slug'];?>"><?php echo $data_cate['cate_title'];?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>