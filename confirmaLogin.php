<?php
include_once("includes/body.inc.php");

$nome=addslashes($_POST['utilizador']);
$id=intval($_POST['id']);
$sql="select * from perfis where perfilId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
session_start();
$_SESSION['id']=$dados['perfilId'];
$_SESSION['nome']=$dados['perfilNome'];


header("location:index.php");
?>
