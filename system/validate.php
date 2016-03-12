<?php

if (!defined('SYSPATH'))
    die('Request not found!');

class valid {
    function valid_is_empty($string) {
        if(empty($string)){
            return 'You must fill in this field';
        }
    }

    function valid_is_slug($string) {
        $partern = '/([a-zA-Z0-9-_]+)/';
        return preg_match($partern, $string);
    }
    
    function show_error($error, $key) {
        if (isset($error[$key])) {
            echo '<div class="alert alert-warning">'.$error[$key].'</div>';
        }
    }

}

$valid = new valid();
?>