<?php
// dados na base de dados
include_once("../includes/body.inc.php");

toposingle();
$id=intval($_POST['idEstabelecimento']);

 $sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=". $id . " and redeTipo='favorito'";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
    $sql = "delete from redes where redePerfilId=" . $_SESSION['id'] . " and redeEstabelecimentoId=" . $id . " and redeTipo='favorito'";

}else{
    $sql = "insert into redes values(".$_SESSION['id']. "," . $id.",'favorito')";
}
mysqli_query($con,$sql);

bot();
?>
