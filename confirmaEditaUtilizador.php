<?php
// dados na base de dados

include_once("includes/body.inc.php");
$nome = addslashes($_POST['perfilNome']);
$localidade = addslashes($_POST['perfilLocalidade']);
$old = addslashes($_POST['perfilOld']);
$palavra = addslashes($_POST['perfilPalavra']);
$Comf = addslashes($_POST['ComfirmaperfilPalavra']);
$email = $_POST['perfilEmail'];
$id = $_POST['id'];
$imagem =$_FILES['perfilAvatar']['name'];
$novoNome="imagens/".$imagem;

//$sql ="UPDATE perfis set perfilNome ='".$nome."'and perfilAvatar='".$novoNome."'and perfilLocalidade='".$localidade."' and perfilEmail='".$email."' where perfilId='$id'";



$sql="Update perfis set perfilNome='".$nome."', perfilLocalidade='".$localidade."', perfilEmail='".$email."'";

if ($old!=''){
    alert("Faltam dados");
    header("location:DefPerfil.php?id={$id}");
}


if ($palavra=''){
    alert("Faltam dados");
    header("location:DefPerfil.php?id={$id}");
}
if($imagem!=''){
    $sql.=", perfilAvatar='imagens/".$imagem."'";
    copy($_FILES['perfilAvatar']['tmp_name'],$novoNome);
}

 echo  $sql.=" , perfilPassword='".$Comf."' where perfilId=".$id;

/*$sql="Update categorias set categoriaNome='".$categoria."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['categoriaImagem']['tmp_name'],$novoNome);
}

$sql.=" where categoriaId=".$id;

*/

$result = mysqli_query($con, $sql);
//header("location:novoperfil.php?id={$id}");
?>

