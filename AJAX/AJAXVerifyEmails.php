<?php
include_once("../includes/config.inc.php");

$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$sql="select perfilEmail from perfis ";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);



if (isset($_POST['email'])){
    $email= addslashes($_POST['email']);
    if ($dados['perfilEmail']===($email)){

            echo 'Email Correto';

    }else{
        echo 'Email Errado';
    }
}
?>
