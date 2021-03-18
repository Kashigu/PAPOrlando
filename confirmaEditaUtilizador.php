<?php
// dados na base de dados

include_once("includes/body.inc.php");
$nome = addslashes($_POST['perfilNome']);
$localidade = addslashes($_POST['perfilLocalidade']);
$email = $_POST['perfilEmail'];
$id = $_POST['id'];
$imagem =$_FILES['perfilAvatar']['name'];
$novoNome="../imagens/".$imagem;

//$sql ="UPDATE perfis set perfilNome ='".$nome."'and perfilAvatar='".$novoNome."'and perfilLocalidade='".$localidade."' and perfilEmail='".$email."' where perfilId='$id'";


echo $sql="Update perfis set perfilNome='".$nome."'and perfilLocalidade='".$localidade."' and perfilEmail='".$email."'";
if($imagem!=''){
    $sql.=", perfilAvatar='imagens/".$imagem."'";
    copy($_FILES['perfilAvatar']['tmp_name'],$novoNome);
}

echo $sql.=" where perfilId=".$id;

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

