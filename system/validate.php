<?php

if (!defined('SYSPATH'))
    die('Request not found!');

class valid {

    function valid_is_empty($string) {
        if (empty($string)) {
            return 'You must fill in this field';
        }
    }

    function valid_is_slug($string) {
        $partern = '/([a-zA-Z0-9-_]+)/';
        return preg_match($partern, $string);
    }

    function valid_is_email($string) {
        if (!filter_var($string, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }
        if (empty($string)) {
            return "You must enter your email!";
        }
    }

    function valid_is_phone($string) {
        $partern = '/([0-9]+)/';
        if (strlen($string) > 10 && strlen($string) < 15 && preg_match($partern, $string)) {
            
        } else {
            return "Invalid phone number";
        }
    }

    function confirm_password($string1, $string2) {
        if (isset($string1)) {
            if (strlen($string1) < 8) {
                return $error['user_password'] = "Password is at least 8 character!";
            }
            if (isset($string2)) {
                if ($string1 != $string2) {
                    return $error['user_confirm_password'] = "Confirm your password again!";
                }
            } else {
                return $error['user_confirm_password'] = "You have to enter your confirm password!";
            }
        } else {
            return $error['user_password'] = "You have to enter your password!";
        }
    }

    function show_error($error, $key) {
        if (isset($error[$key])) {
            echo '<div class="alert alert-warning">' . $error[$key] . '</div>';
        }
    }

}

?>