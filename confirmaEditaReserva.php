<?php
// dados na base de dados
/*
include_once("includes/body.inc.php");
$categoria = addslashes($_POST['categoriaNome']);
$id = $_POST['categoriaId'];
$imagem =$_FILES['categoriaImagem']['name'];
$novoNome="imagens/".$imagem;


copy($_FILES['imagem']['tmp_name'],"../".$novoNome);

$sql ="UPDATE categorias set categoriaNome ='".$categoria."'and categoriaImagemURL='".$novoNome."' where categoriaId='$id'";


/*$sql="Update categorias set categoriaNome='".$categoria."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['categoriaImagem']['tmp_name'],$novoNome);
}

$sql.=" where categoriaId=".$id;

*/


/*
include_once ("includes/body.inc.php");
$nome=addslashes($_POST['categoriaNome']);
$id=$_POST['categoriaId'];
$imagem=$_FILES['imagem']['name'];
$novoNome="../imagens/".$imagem;

$sql="Update categorias set categoriaNome='".$nome."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}

$sql.=" where categoriaId=".$id;
mysqli_query($con,$sql);
header("location:categorias.php");
*/



//------------------------------------------------------------- Não consegui -------------------------------------//

include_once("includes/body.inc.php");
session_start();
$reserva = addslashes($_POST['reservaDescricao']);
$id=intval($_POST['reservaId']);

// $sql ="UPDATE categorias set categoriaNome ='".$categoria."'and categoriaImagemURL='".$novoNome."' where categoriaId='$id'";


echo $sql="Update reservas set reservaDescricao='$reserva' where reservaId=$id";

$result = mysqli_query($con, $sql);
mysqli_query($con,$sql);
header("location:listaReserva.php?id=$_SESSION");
?>
