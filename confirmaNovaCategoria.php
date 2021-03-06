<?php
include_once ("includes/body.inc.php");


$nome=$_POST['nomeCategoria'];
$imagem=$_FILES['logoCategoria']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['logoCategoria']['tmp_name'],$novoNome);

$sql="insert into categorias(categoriaNome,categoriaImagemURL) values('".$nome."','imagens/".$imagem."');";
mysqli_query($con,$sql);
header("location:categorias.php");
?>