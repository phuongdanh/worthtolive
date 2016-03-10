<?php

if (!defined('SYSPATH'))
    die('Request not found!');

class valid {
    function valid_is_empty($string) {
        return empty($string);
    }

    function valid_is_slug($string) {
        $partern = '/({a-zA-Z0-9-_}+)/';
        return preg_match($partern, $string);
    }

    function show_error($error, $key) {
        if (isset($error[$key])) {
            echo $error[$key];
        }
    }

}

$valid = new valid();
?>