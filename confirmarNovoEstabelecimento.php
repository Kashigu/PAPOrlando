<?php
include_once("includes/body.inc.php");




$idUtilizador = intval($_POST['id']);
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


$novoNome="imagens/".$fundo;
$novoNome1="imagens/".$logo;
$novoNome2="imagens/".$estabelecimento;



copy($_FILES['logo']['tmp_name'],$novoNome);
copy($_FILES['fundo']['tmp_name'],$novoNome1);
copy($_FILES['estabelecimento']['tmp_name'],$novoNome2);


echo $sql = "insert into estabelecimentos (estabelecimentoPerfilId,estabelecimentoCategoriaId,estabelecimentoNome,estabelecimentoSlogan,
                                    estabelecimentoDescricao,estabelecimentoDescricao2,
                                    estabelecimentoLocalidade,estabelecimentoDistritoId,estabelecimentoMorada,
                                    estabelecimentoTelefone,estabelecimentoEmail,
                                    estabelecimentoFundoURL,estabelecimentoMiniaturaURL,
                                    estabelecimentoInteriorURL) values('" . $idUtilizador . "','" . $idCategoria . "','" . $nome . "','" . $nomeSlogan . "',
                                                                        '" . $sobre . "','" . $nomeLoca . "','" . $horas . "',
                                                                        '" . $nomeDistrito . "','" . $rua . "','" . $numero . "',
                                                                        '" . $email . "',
                                                                        '" . $novoNome . "','" . $novoNome1 . "',
                                                                        '" . $novoNome2 . "');";

mysqli_query($con, $sql);
$idEst=mysqli_insert_id($con); // último Id criado pelo Insert

/*$sql="insert into estabelecimentocategorias values($idCategoria,$idEst,'')";
mysqli_query($con, $sql);*/

header("location:criado.php?id=$idEst");
?>