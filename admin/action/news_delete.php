<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('SYSPATH'))
    die('Request not found!');
$id = input_get('id');
require 'db/db_new.php';
if($new_object->delete('news','news_id',$id)):
    header('location:index.php?action=news');
else:
    echo '<script language="javascript">';
        echo 'alert("Can not delete!");';
        echo 'window.location.assign("index.php?action=news");';
    echo '</script>';
endif;
