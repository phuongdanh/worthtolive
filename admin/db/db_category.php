<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class cate_cla extends process{
    function get_list2($start,$limit){
        $cate_list = $this->get_list("SELECT * FROM categories LIMIT $start, $limit");
        return $cate_list;
    }
}
$cate_object = new cate_cla();


$total_record = $cate_object->count('SELECT count(*) AS num_count FROM categories', 'num_count');