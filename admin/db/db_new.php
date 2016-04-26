<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class new_cla extends process {

    function get_list2($start, $limit) {
        $new_list = $this->get_list("SELECT * FROM news ORDER BY news_id DESC LIMIT $start, $limit");
        return $new_list;
    }

}

$new_object = new new_cla();

if (isset($_POST['save'])) {
    $action = input_post('type_action');
    if ($action == 'new_add') { /* --------------------------------------cai nay la phan them ban nhe-------- */
        if ($_FILES['news_image']['error'] > 0) {
            $error['news_image'] = 'Image is not fit!';
        } else {
            $cate_id = input_post('cate_id');
            $cate_infor = $new_object->get_row("SELECT cate_title, cate_slug FROM categories WHERE cate_id = " . $cate_id);
            $path = 'public/site/images/' . $cate_id . '/' . $_FILES['news_image']['name'];
// Upload file
            if (move_uploaded_file($_FILES['news_image']['tmp_name'], '../' . $path)) {
                
            } else {
                $error['news_image'] = 'Image is not uploaded!';
            }
        }
        $cate_id = input_post('cate_id');
        $cate_infor = $new_object->get_row("SELECT cate_title, cate_slug FROM categories WHERE cate_id = " . $cate_id);
        $data = array(
            'news_title' => input_post('news_title'),
            'news_slug' => input_post('news_slug'),
            'news_content' => input_post('news_content'),
            'cate_id' => input_post('cate_id'),
            'cate_title' => $cate_infor['cate_title'],
            'cate_slug' => $cate_infor['cate_slug'],
            'news_keywords' => input_post('news_keywords'),
            'news_description' => input_post('news_des'),
            'news_robots' => input_post('news_robots'),
            'created' => date('Y/m/d H:i:s', time()),
            'add_userid' => $_SESSION['ss_user_token']['user_id'],
        );
        if (isset($path)) {
            $data['news_image'] = $path;
        }
//Xu lu validate du lieu

        if ($valid->valid_is_empty($data['news_title'])) {
            $error['news_title'] = 'You must enter title';
        } else if ($new_object->exist('news', 'news_title', $data['news_title'], 'news_id')) {
//Kiem tra xem chung da ton tai trong CSDL chua
            $error['news_title'] = 'Title is already exist!';
        }
//Xu ly content
        if (strlen($data['news_content']) < 200) {
            $error['news_content'] = 'Content is very short, Minimize is 200 characters!';
        }

//Xu ly slug
        if ($data['news_slug'] == '') {
            if (!isset($error['news_title'])) {
                $data['news_slug'] = $data['news_title'];
                $data['news_slug'] = trim(mb_strtolower($data['news_slug']));
                $data['news_slug'] = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $data['news_slug']);
                $data['news_slug'] = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $data['news_slug']);
                $data['news_slug'] = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $data['news_slug']);
                $data['news_slug'] = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $data['news_slug']);
                $data['news_slug'] = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $data['news_slug']);
                $data['news_slug'] = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $data['news_slug']);
                $data['news_slug'] = preg_replace('/(đ)/', 'd', $data['news_slug']);
                $data['news_slug'] = preg_replace('/[^a-z0-9-\s]/', '', $data['news_slug']);
                $data['news_slug'] = preg_replace('/([\s]+)/', '-', $data['news_slug']);
            }
        } elseif (!$valid->valid_is_slug($data['news_slug'])) {
            $error['news_slug'] = 'Unvalid slug';
        } else if ($new_object->exist('news', 'news_slug', $data['news_slug'], 'news_id')) {
//Kiem tra xem chung da ton tai trong CSDL chua
            $error['news_slug'] = 'Slug is already exist!';
        }



        if (empty($error)) {
            $flag = $new_object->add('news', $data);
            if ($flag) {
                echo '<script language="javascript">';
                echo 'alert("A new news have just been added!");';
                echo 'window.location.assign("admin/index.php?action=news");';
                echo '</script>';
                die();
            } else {
                echo 'Can not add this news to database!';
            }
        } else {
            echo 'There are some error!';
        }
    }/* -----------------------------ket thuc phan them - */
    
    
    
    
    
    
    
    
    
    
    
    if ($action == 'new_edit') { /* --------------------------------------cai nay la phan edit ban nhe-------- */
        $id = input_post('news_id');
        if ($_FILES['news_image']['name'] != NULL) {
            if ($_FILES['news_image']['error'] > 0) {
                $error['news_image'] = 'Image is not fit!';
            } else {
                $cate_id = input_post('cate_id');
                $path = 'public/site/images/' . $cate_id . '/' . $_FILES['news_image']['name'];
// Upload file
                if (move_uploaded_file($_FILES['news_image']['tmp_name'], '../' . $path)) {
                    $real_image = $path;
                } else {
                    $error['news_image'] = 'Image is not uploaded!';
                }
            }
        } else {
            $real_image = input_post('current_image');
        }

        $data1 = array(
            'news_title' => input_post('news_title'),
            'news_slug' => input_post('news_slug'),
            'news_keywords' => input_post('news_keywords'),
            'news_description' => input_post('news_des'),
            'news_robots' => input_post('news_robots'),
            'news_content' => input_post('news_content'),
            'news_image' => $real_image,
            'news_id' => $id,
        );
//Xu lu validate du lieu

        if ($valid->valid_is_empty($data1['news_title'])) {
            $error['news_title'] = 'You must enter title';
//Exist function in edit will be different with add
        } else if ($new_object->edit_exist('news', 'news_title', $data1['news_title'], 'news_id', $data1['news_id'])) {
//Kiem tra xem chung da ton tai trong CSDL chua
            $error['news_title'] = 'Title da ton tai';
        }
        if (!$valid->valid_is_slug($data1['news_slug'])) {
            $error['news_slug'] = 'Unvalid slug';
        } else if ($new_object->edit_exist('news', 'news_slug', $data1['news_slug'], 'news_id', $data1['news_id'])) {
//Kiem tra xem chung da ton tai trong CSDL chua
            $error['news_slug'] = 'Slug da ton tai';
        }
        if (strlen($data1['news_content']) < 500) {
            $error['news_content'] = 'Content is very short, Minimize is 500 characters!';
        }
        if (empty($error)) {
            $flag = $new_object->update('news', $data1, 'news_id', $id);
            if ($flag) {
                echo '<script language="javascript">';
                echo 'alert("Edit successfully!");';
                echo 'window.location.assign("admin/index.php?action=news");';
                echo '</script>';
                die();
            } else {
                echo 'It was not updated!';
            }
        }
    }/* -----------------------------ket thuc phan sua----------- */
}