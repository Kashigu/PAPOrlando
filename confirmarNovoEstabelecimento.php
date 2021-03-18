<?php
include_once("includes/body.inc.php");


$nome = addslashes($_POST['nomeEsta']);
$nomeLoca = addslashes($_POST['nomeLoca']);
$nomeDistrito = $_POST['distrito'];
//$nomeCategoria =$_POST['categoria'];
$nomeSlogan = addslashes($_POST['nomeSlogan']);
$sobre = $_POST['sobre'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$horas = $_POST['horas'];
$horas1 = $_POST['horas1'];
$horas2 = $_POST['horas2'];
$logo = $_FILES['logo'];
$fundo = $_FILES['fundo'];
$google = $_FILES['google'];
$estabelecimento = $_FILES['estabelecimento'];


$sql = "insert into estabelecimentos (estabelecimentoNome,estabelecimentoSlogan,
                                    estabelecimentoDescriчуo,
                                    estabelecimentoLocalidade,estabelecimentoMorada,
                                    estabelecimentoTelefone,estabelecimentoEmail,
                                    estabelecimentoFundoURL,estabelecimentoMiniaturaURL,
                                    estabelecimentoInteriorURL) values('" . $nome . "','" . $nomeSlogan . "',
                                                                        '" . $sobre . "','" . $nomeLoca . "',
                                                                        '" . $nomeDistrito . "','" . $rua . "','" . $numero . "',
                                                                        '" . $email . "',
                                                                        '" . $logo . "','" . $fundo . "',
                                                                        '" . $estabelecimento . "');";

mysqli_query($con, $sql);
header("location:criadoestabelecimentos.php?id={$id}");
?>