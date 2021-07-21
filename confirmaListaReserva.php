<?php
include_once("includes/body.inc.php");
session_start();



$idPer=$_SESSION['id'];
$idEst=intval($_POST['id']); //vem escondido no formulário
$descricao=$_POST['descricao'];
$data=addslashes($_POST['data']);
$hora=addslashes($_POST['hora']);
echo $sql="Insert into reservas (reservaId,reservaData,reservaDescricao,reservaEstabelecimentoId,reservaPerfilId)
                                values(0,'".$data." ".$hora."','" . $descricao . "','" . $idEst . "','" . $idPer . "');";
$result=mysqli_query($con,$sql);


header("location:listaReserva.php?id=$idPer");
bot();
?>



