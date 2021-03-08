<?php
include_once ("../includes/body.inc.php");


$categoria = addslashes($_POST['categoria']);
$imagem=$_FILES['imagem']['name'];
$novoNome="imagens/".$imagem;


$sql="insert into categorias(categoriaId,categoriaNome,categoriaImagemURL) values(0,'".$categoria."','imagens/".$imagem."');";
$result = mysqli_query($con, $sql);
?>