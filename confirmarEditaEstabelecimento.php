<?php
include_once("includes/body.inc.php");

$id = $_GET['id'];
$nome = addslashes($_POST['nomeEsta']);
$nomeLoca = addslashes($_POST['nomeLoca']);
$nomeDistrito = $_POST['distrito'];
$nomeCategoria =$_POST['categoria'];
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



copy($_FILES['logo']['tmp_name'],"../".$logo);
copy($_FILES['fundo']['tmp_name'],"../".$fundo);
copy($_FILES['estabelecimento']['tmp_name'],"../".$estabelecimento);


echo $sql = "insert into estabelecimentos (estabelecimentoPerfilId,estabelecimentoNome,estabelecimentoSlogan,
                                    estabelecimentoDescrição,
                                    estabelecimentoLocalidade,estabelecimentoDistritoId,estabelecimentoMorada,
                                    estabelecimentoTelefone,estabelecimentoEmail,
                                    estabelecimentoFundoURL,estabelecimentoMiniaturaURL,
                                    estabelecimentoInteriorURL) values('" . $id . "','" . $nome . "','" . $nomeSlogan . "',
                                                                        '" . $sobre . "','" . $nomeLoca . "',
                                                                        '" . $nomeDistrito . "','" . $rua . "','" . $numero . "',
                                                                        '" . $email . "',
                                                                        '" . $novoNome . "','" . $novoNome1 . "',
                                                                        '" . $novoNome2 . "');";

mysqli_query($con, $sql);
header("location:criado.php?id={$id}");
?>