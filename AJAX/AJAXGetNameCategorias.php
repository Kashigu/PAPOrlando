<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idCategoria']);
$sql="Select * from categorias where categoriaId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['categoriaNome'];
?>
