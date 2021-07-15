<?php
// dados na base de dados

include_once("includes/body.inc.php");
$id = $_POST['id'];
$nome = addslashes($_POST['nomeEsta']);
$nomeLoca = addslashes($_POST['nomeLoca']);
$nomeDistrito = $_POST['distrito'];
$idCategoria =intval($_POST['categoria']);
$nomeSlogan = addslashes($_POST['nomeSlogan']);
$sobre = $_POST["reviewTexto"];
$sobre1 = $_POST['reviewTexto1'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$logo = $_FILES['logo']['name'];
$fundo = $_FILES['fundo']['name'];
$google = addslashes($_POST['google']);


$novoNome="imagens/".$logo;
$novoNome1="imagens/".$fundo;

//$sql ="UPDATE perfis set perfilNome ='".$nome."'and perfilAvatar='".$novoNome."'and perfilLocalidade='".$localidade."' and perfilEmail='".$email."' where perfilId='$id'";


$sql="Update estabelecimentos set estabelecimentoNome='".$nome."', estabelecimentoLocalidade='".$nomeLoca."', estabelecimentoEmail='".$email."'
                                    , estabelecimentoSlogan='".$nomeSlogan."'
                                    , estabelecimentoDescricao='".$sobre."'
                                    , estabelecimentoDescricao2='".$sobre1."'
                                    , estabelecimentoDistritoId='".$nomeDistrito."'
                                    , estabelecimentoMorada='".$rua."'
                                    , estabelecimentoTelefone='".$numero."'
                                    , estabelecimentoCategoriaId='".$idCategoria."'
                                    , estabelecimentoPosicao='".$google."'";


if($logo!=''){
    $sql.=", estabelecimentoMiniaturaURL='imagens/".$logo."'";
    copy($_FILES['logo']['tmp_name'],$novoNome);

}
if($fundo!=''){
    $sql.=", estabelecimentoFundoURL='imagens/".$fundo."'";
    copy($_FILES['fundo']['tmp_name'],$novoNome1);
}

echo $sql.=" where estabelecimentoId=".$id;

$result = mysqli_query($con, $sql);
//header("location:criado.php?id={$id}");
?>

