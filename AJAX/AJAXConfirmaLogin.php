<?php
include_once("../includes/body.inc.php");

$nome=addslashes($_POST['nome']);
$email=$_POST['email'];
$password=addslashes($_POST['password']);
$password=md5($password);
$sql="select * from perfis where perfilEmail='$email' and perfilNome='$nome' and perfilPassword='$password' and perfilEstado='ativo'";
$result=mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>
