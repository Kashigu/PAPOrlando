<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$valor=intval($_POST['valor']);
$idRede=intval($_POST['idRede']);

 $sql = "insert into ratings (ratingRedeId, ratingValor) values('".$idRede. "','" . $valor."')";
 mysqli_query($con,$sql);


$sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=". $idRede . " and redeTipo='rating'";
mysqli_query($con,$sql);


 $sql = "insert into redes (redeId, redePerfilId, redeEstabelecimentoId, redeTipo) values(0,".$_SESSION['id']. "," . $idRede.",'rating')";

mysqli_query($con,$sql);

bot();
?>





 // insert into redes (redeId, redeEstabelecimentoId, redePerfilId, redeTipo) VALUES (0,'1','2','rating')

bot();
?>
