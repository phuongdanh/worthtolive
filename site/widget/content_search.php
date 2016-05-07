<?php if (!defined('SYSPATH')) die('Request not found!'); ?>
<?php
$key = input_get('key');
$data = new process();
$news = $data->get_list("SELECT * FROM news WHERE news_title LIKE '%" . $key . "%' ORDER BY created DESC LIMIT 10");
?>
<div class="search">
    <span class="text-info demuc">There are no results found</span>
    <hr>
    <ul class="list">
        <?php foreach ($news as $value) { ?>
            <li>
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        <img src="<?php echo $value['news_image'];?>">
                    </div>
                    <div class="col-md-5 col-sm-7">
                        <a href="index.php?action=read&slug=<?php echo $value['news_slug'];?>"><span class="title"><?php echo $value['news_title'];?></span></a>
                        <p><?php echo $value['news_description'];?></p>
                        <i>Date: <?php echo $value['created'];?></i>
                    </div>
                </div>

            </li>

<?php } ?>



    </ul>

</div>