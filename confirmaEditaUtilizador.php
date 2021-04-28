<?php
// dados na base de dados

include_once("includes/body.inc.php");
$nome = addslashes($_POST['perfilNome']);
$localidade = addslashes($_POST['perfilLocalidade']);
$old = addslashes($_POST['perfilOld']);
$palavra = addslashes($_POST['perfilPalavra']);
$Comf = addslashes($_POST['ConfirmaperfilPalavra']);
$email = $_POST['perfilEmail'];
$id = $_POST['id'];
$imagem =$_FILES['perfilAvatar']['name'];
$novoNome="imagens/".$imagem;

//$sql ="UPDATE perfis set perfilNome ='".$nome."'and perfilAvatar='".$novoNome."'and perfilLocalidade='".$localidade."' and perfilEmail='".$email."' where perfilId='$id'";



echo $sql="Update perfis set perfilNome='".$nome."', perfilLocalidade='".$localidade."', perfilEmail='".$email."'";



if($imagem!=''){
    $sql.=", perfilAvatar='imagens/".$imagem."'";
    copy($_FILES['perfilAvatar']['tmp_name'],$novoNome);
}
echo $sql2 ="select perfilPassword from perfis where perfilId = ".$id;
$passe = mysqli_query($con,$sql2);

if (isset($old) and isset($palavra)){
    if($old == $passe){
    if ($Comf == $palavra){
    echo  $sql.=" , perfilPassword='".$Comf."' where perfilId=".$id;
 }
    } else if ($Comf <> $palavra){
        header("location:Defperfil.php?id={$id}&erro=1");
    }
} else {
    header("location:Defperfil.php?id={$id}&erro=1");
}

/*$sql="Update categorias set categoriaNome='".$categoria."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['categoriaImagem']['tmp_name'],$novoNome);
}

$sql.=" where categoriaId=".$id;

*/

$result = mysqli_query($con, $sql);
header("location:Defperfil.php?id={$id}");
?>

