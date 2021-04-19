<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$id=intval($_POST['idEstabelecimento']);

 $sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=". $id . " and redeTipo='gosto'";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
    $sql = "delete from redes where redePerfilId=" . $_SESSION['id'] . " and redeEstabelecimentoId=" . $id . " and redeTipo='gosto'";

}else{
    $sql = "insert into redes (redeId, redePerfilId, redeEstabelecimentoId, redeTipo) values(0,".$_SESSION['id']. "," . $id.",'gosto')";
}
mysqli_query($con,$sql);

bot();
?>
