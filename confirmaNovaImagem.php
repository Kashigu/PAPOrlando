<?php
include_once ("includes/body.inc.php");
$idE=intval($_GET['id']);

$nome=$_POST['nomeImagem'];
$imagem=$_FILES['imagem']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['imagem']['tmp_name'],"../".$novoNome);


// A imagem só aparece porque está na pasta imagens/ mas se não tiver não aparece //



//copy($_FILES['logoEmpresa']['tmp_name'],$novoNome);

//$sql="insert into empresas(empresaNome,empresaLogoURL) values('".$nome."','imagens/".$imagem."');";

$sql="insert into imagens(imagemId,imagemNome,imagemURL) values(0,'".$nome."','".$novoNome."',.$idE);";
mysqli_query($con,$sql);
header("location:galeria.php?id={$idE}");
?>