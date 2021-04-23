<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$valor=intval($_POST['valor']);
$idRede=intval($_POST['idRede']);

 echo $sql = "insert into ratings (ratingRedeId, ratingValor) values('".$idRede. "','" . $valor."')";
 mysqli_query($con,$sql);

 // insert into redes (redeId, redeEstabelecimentoId, redePerfilId, redeTipo) VALUES (0,'1','2','rating')

bot();
?>
