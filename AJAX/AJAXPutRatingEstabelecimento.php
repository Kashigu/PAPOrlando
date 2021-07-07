<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$valor=intval($_POST['valor']);
$id=intval($_POST['id']);


$sql = "insert into redes (redeId, redePerfilId, redeEstabelecimentoId, redeTipo) values(0,".$_SESSION['id']. "," . $id.",'rating')";
mysqli_query($con,$sql);
if(!mysqli_error($con)){
    $idRede=mysqli_insert_id($con);
    $sql = "insert into ratings (ratingRedeId, ratingValor) values(".$idRede."," . $valor.")";
    mysqli_query($con,$sql);
}else{
    $sql = "update ratings inner join redes on redeId = ratingRedeId set ratingValor=".$valor;
    $sql.=" where redePerfilId =".$_SESSION['id']. " and redeEstabelecimentoId=".$id;
    mysqli_query($con,$sql);
}
?>
