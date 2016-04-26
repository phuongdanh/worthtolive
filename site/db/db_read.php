<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$data = new process();



/* Xu ly get Ip cua user */

function getIp() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function setViewed($news_viewed, $table, $id, $data) {
    if (!isset($_SESSION[$table . $id])) {
        $_SESSION[$table . $id] = array(
            'id' => $id,
            'timeout' => time(),
        );
        $news_viewed = $news_viewed + 1;
        $viewed = array(
            'news_viewed' => $news_viewed,
        );
        $data->update($table, $viewed, 'news_id', $id);
    } elseif (time() - $_SESSION[$table . $id]['timeout'] > 7200) {
        unset($_SESSION[$table . $id]);
        $news_viewed = $news_viewed + 1;
        $viewed = array(
            'news_viewed' => $news_viewed,
        );
        $_SESSION[$table . $id] = array(
            'id' => $id,
            'timeout' => time(),
        );
        $data->update($table, $viewed, 'news_id', $id);
    }
}
