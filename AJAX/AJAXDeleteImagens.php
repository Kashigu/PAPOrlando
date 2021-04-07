<?php
include_once("../includes/body.inc.php");

$imagemId=$_POST['imagem'];

$sql="Select imagemEstabelecimentoId from imagens where imagemId=".$imagemId;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);

$sql= "delete from imagens where imagemId=".$imagemId;
mysqli_query($con,$sql);


echo $dados[0];
?>
