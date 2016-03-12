<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class cate_cla extends process {

    function get_list2($start, $limit) {
        $cate_list = $this->get_list("SELECT * FROM categories ORDER BY cate_id DESC LIMIT $start, $limit");
        return $cate_list;
    }

}

$cate_object = new cate_cla();


$total_record = $cate_object->count('SELECT count(*) AS num_count FROM categories', 'num_count');
if (isset($_POST['save'])) {
    $action = input_post('Category_add');
    if ($action == 'Category_add2') {
        $data = array(
            'cate_title' => input_post('cate_title'),
            'cate_slug' => input_post('cate_slug'),
            'cate_keywords' => input_post('cate_keywords'),
            'cate_description' => input_post('cate_des'),
            'cate_robots' => input_post('cate_robots'),
        );
        //Xu lu validate du lieu

        if ($valid->valid_is_empty($data['cate_title'])) {
            $error['cate_title'] = 'You must enter title';
        } else if ($cate_object->exist('categories', 'cate_title', $data['cate_title'], 'cate_id')) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['cate_title'] = 'Title da ton tai';
        }
        if (!$valid->valid_is_slug($data['cate_slug'])) {
            $error['cate_slug'] = 'Unvalid slug';
        } else if ($cate_object->exist('categories', 'cate_slug', $data['cate_slug'], 'cate_id')) {
            //Kiem tra xem chung da ton tai trong CSDL chua
            $error['cate_title'] = 'Slug da ton tai';
        }
        if (empty($error)) {
            $flag = $cate_object->add('categories', $data);
            if ($flag) {
                echo '<script language="javascript">';
                    echo 'alert("A new category have just been added!")';
                echo '</script>';
                header('Location:"http://localhost/worthtolive/admin/index.php?action=category"');
                die();
            } 
        }
    }
}