<?php
include_once ("../includes/body.inc.php");

// por enquanto não manda a imagem por causa do enctype=multipart/form-data> que está nas categorias.php //
$categoria = addslashes($_POST['categoria']);
$imagem=$_FILES['imagem']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['imagem']['tmp_name'],"../".$novoNome);


$sql="insert into categorias(categoriaId,categoriaNome,categoriaImagemURL) values(0,'".$categoria."','".$novoNome."');";
$result = mysqli_query($con, $sql);
?>