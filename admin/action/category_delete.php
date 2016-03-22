<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('SYSPATH'))
    die('Request not found!');

$id = input_post('cate_id');
require 'db/db_category.php';
if($cate_object->delete('categories','cate_id',$id)):
    header('location:index.php?action=category');
else:
    echo '<script language="javascript">';
        echo 'alert("Can not delete!");';
        echo 'window.location.assign("index.php?action=category");';
    echo '</script>';
endif;