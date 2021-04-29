<?php
include_once("../includes/config.inc.php");

if (isset($_POST['email'])){
    $email= addslashes($_POST['email']);
    if (!empty($email)){
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo 'Não é um Email válido';
        }else{
            echo 'Email válido';
        }
    }
}
?>
