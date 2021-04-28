<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$nome=addslashes($_POST['nome']);
$email=addslashes($_POST['email']);
$localidade=addslashes($_POST['localidade']);
$password=addslashes($_POST['pass']);
$Spassword=addslashes($_POST['Spass']);
echo $sql="insert into perfis(perfilId, perfilNome, perfilLocalidade, perfilEmail, perfilEstado, perfilPassword, perfilAdmin) values(0,'$nome','$localidade','$email','ativo','$password','utilizador')";
mysqli_query($con,$sql);
$lastId=mysqli_insert_id($con);
session_start();
$_SESSION['id']=$lastId;
$_SESSION['nome']=$nome;
header("location:index.php");
?>