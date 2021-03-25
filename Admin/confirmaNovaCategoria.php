<?php
include_once ("../includes/body.inc.php");


$categoria=$_POST['nomeCategoria'];
$imagem=$_FILES['imagem']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['imagem']['tmp_name'],"../".$novoNome);


// A imagem só aparece porque está na pasta imagens/ mas se não tiver não aparece //



//copy($_FILES['logoEmpresa']['tmp_name'],$novoNome);

//$sql="insert into empresas(empresaNome,empresaLogoURL) values('".$nome."','imagens/".$imagem."');";

$sql="insert into categorias(categoriaId,categoriaNome,categoriaImagemURL) values(0,'".$categoria."','".$novoNome."');";
mysqli_query($con,$sql);
header("location:categorias.php");
?>