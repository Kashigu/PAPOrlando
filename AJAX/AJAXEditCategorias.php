<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$categoria = addslashes($_POST['categoriaNome']);
$id = $_POST['categoriaId'];
$imagem =$_FILES['categoriaImagem']['name'];
$novoNome="../imagens/".$imagem;

$sql ="UPDATE categorias set categoriaNome ='".$categoria."'and categoriaImagemURL='".$imagem."' where categoriaId='$id'";


/*$sql="Update categorias set categoriaNome='".$categoria."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['categoriaImagem']['tmp_name'],$novoNome);
}

$sql.=" where categoriaId=".$id;

*/

$result = mysqli_query($con, $sql);
$dados=mysqli_fetch_array($result);
?>
