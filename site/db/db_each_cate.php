<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class each extends process{
    function get_most($cate_of_news){
        $get_most = $this->get_list("SELECT * FROM news WHERE cate_slug = '".$cate_of_news."' ORDER BY created DESC");
        return $get_most;
    }
}
$data = new each();
