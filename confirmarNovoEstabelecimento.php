<?php
include_once("includes/body.inc.php");




$idUtilizador = intval($_POST['id']);
$nome = addslashes($_POST['nomeEsta']);
$nomeLoca = addslashes($_POST['nomeLoca']);
$nomeDistrito = $_POST['distrito'];
$idCategoria =intval($_POST['categoria']);
$nomeSlogan = addslashes($_POST['nomeSlogan']);
$sobre = $_POST['reviewTexto'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$sobre1 = $_POST['reviewTexto1'];
$logo = $_FILES['logo']['name'];
$fundo = $_FILES['fundo']['name'];
$google = addslashes($_POST['google']);



$novoNome="imagens/".$logo;
$novoNome1="imagens/".$fundo;




copy($_FILES['logo']['tmp_name'],$novoNome);
copy($_FILES['fundo']['tmp_name'],$novoNome1);



echo $sql = "insert into estabelecimentos (estabelecimentoPerfilId,estabelecimentoCategoriaId,estabelecimentoNome,estabelecimentoSlogan,
                                    estabelecimentoDescricao,estabelecimentoDescricao2,
                                    estabelecimentoLocalidade,estabelecimentoDistritoId,estabelecimentoMorada,
                                    estabelecimentoTelefone,estabelecimentoEmail,
                                    estabelecimentoMiniaturaURL,estabelecimentoFundoURL,estabelecimentoPosicao) values('" . $idUtilizador . "','" . $idCategoria . "','" . $nome . "','" . $nomeSlogan . "',
                                                                        '" . $sobre . "','" . $sobre1 . "','" . $nomeLoca . "',
                                                                        '" . $nomeDistrito . "','" . $rua . "','" . $numero . "',
                                                                        '" . $email . "',
                                                                        '" . $novoNome . "','" . $novoNome1 . "','" . $google . "');";

mysqli_query($con, $sql);
$idEst=mysqli_insert_id($con); // último Id criado pelo Insert

/*$sql="insert into estabelecimentocategorias values($idCategoria,$idEst,'')";
mysqli_query($con, $sql);*/

//header("location:criado.php?id=$idEst");
?>