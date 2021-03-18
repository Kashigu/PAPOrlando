<?php
include_once("../includes/body.inc.php");


$id=intval($_GET['id']);
$sql= "delete from perfis where perfilId=".$id;
mysqli_query($con,$sql);
header("location:novoperfil.php");



?>
