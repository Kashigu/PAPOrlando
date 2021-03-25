<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idImagem']);
$sql="Select * from imagens where imagemId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['imagemNome'];
?>
