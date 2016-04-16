
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if (isset($_SESSION['ss_user_token'])) {
        unset($_SESSION['ss_user_token']);
    }
header('location: index.php?action=home');