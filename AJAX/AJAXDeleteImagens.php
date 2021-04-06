<?php
include_once("../includes/body.inc.php");

$categoriaId=$_POST['imagem'];

$sql= "delete from imagens where imagemId=".$categoriaId;


$result = mysqli_query($con,$sql);
?>
