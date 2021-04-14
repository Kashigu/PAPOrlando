<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idReserva']);
$sql="Select * from reservas where reservaId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['reservaDescricao'];
?>
