<?php
// dados na base de dados

include_once("includes/body.inc.php");
$id = $_POST['id'];
$nome = addslashes($_POST['nomeEsta']);
$nomeLoca = addslashes($_POST['nomeLoca']);
$nomeDistrito = $_POST['distrito'];
$idCategoria =intval($_POST['categoria']);
$nomeSlogan = addslashes($_POST['nomeSlogan']);
$sobre = $_POST['sobre'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$horas = $_POST['horas'];
$horas1 = $_POST['horas1'];
$horas2 = $_POST['horas2'];
$logo = $_FILES['logo']['name'];
$fundo = $_FILES['fundo']['name'];
//$google = $_FILES['google'];
$estabelecimento = $_FILES['estabelecimento']['name'];


$novoNome="imagens/".$logo;
$novoNome1="imagens/".$fundo;
$novoNome2="imagens/".$estabelecimento;

//$sql ="UPDATE perfis set perfilNome ='".$nome."'and perfilAvatar='".$novoNome."'and perfilLocalidade='".$localidade."' and perfilEmail='".$email."' where perfilId='$id'";


$sql="Update estabelecimentos set estabelecimentoNome='".$nome."', estabelecimentoLocalidade='".$nomeLoca."', estabelecimentoEmail='".$email."'
, estabelecimentoSlogan='".$nomeSlogan."'
, estabelecimentoDescricao='".$sobre."'
, estabelecimentoDescricao2='".$horas."'
, estabelecimentoDistritoId='".$nomeDistrito."'
, estabelecimentoMorada='".$rua."'
, estabelecimentoTelefone='".$numero."'
, estabelecimentoCategoriaId='".$idCategoria."'
, estabelecimentoDescricao2='".$horas."'
";

if($logo!=''){
    $sql.=", estabelecimentoMiniaturaURL='imagens/".$logo."'";
    copy($_FILES['logo']['tmp_name'],$novoNome);

}
if($fundo!=''){
    $sql.=", estabelecimentoFundoURL='imagens/".$fundo."'";
    copy($_FILES['fundo']['tmp_name'],$novoNome1);
}
if($estabelecimento!=''){
    $sql.=",estabelecimentoInteriorURL='imagens/".$estabelecimento."'";
    copy($_FILES['estabelecimento']['tmp_name'],$novoNome2);
}

 $sql.=" where estabelecimentoId=".$id;

/*$sql="Update categorias set categoriaNome='".$categoria."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['categoriaImagem']['tmp_name'],$novoNome);
}

$sql.=" where categoriaId=".$id;

*/

$result = mysqli_query($con, $sql);
header("location:criado.php?id={$id}");
?>

