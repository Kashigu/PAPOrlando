<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$valor=intval($_POST['valor']);
$idRede=intval($_POST['idRede']);

$sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=". $idRede . " and redeTipo='rating'";
mysqli_query($con,$sql);

$sql = "insert into redes (redeId, redePerfilId, redeEstabelecimentoId, redeTipo) values(0,".$_SESSION['id']. "," . $idRede.",'rating')";
mysqli_query($con,$sql);

$sql = "insert into ratings (ratingRedeId, ratingValor) values(".$idRede."," . $valor.")";
mysqli_query($con,$sql);



bot();
?>
