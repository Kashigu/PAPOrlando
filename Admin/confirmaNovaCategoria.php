<?php
include_once ("../includes/body.inc.php");


$categoria=$_POST['nomeCategoria'];
$imagem=$_FILES['imagem']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['imagem']['tmp_name'],"../".$novoNome);


// A imagem s� aparece porque est� na pasta imagens/ mas se n�o tiver n�o aparece //



//copy($_FILES['logoEmpresa']['tmp_name'],$novoNome);

//$sql="insert into empresas(empresaNome,empresaLogoURL) values('".$nome."','imagens/".$imagem."');";

$sql="insert into categorias(categoriaId,categoriaNome,categoriaImagemURL) values(0,'".$categoria."','".$novoNome."');";
mysqli_query($con,$sql);
header("location:categorias.php");
?>