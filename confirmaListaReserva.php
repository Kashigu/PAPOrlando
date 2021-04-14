<?php
include_once("includes/body.inc.php");
toposingle();


$idPer=$_SESSION['id'];
$idEst=intval($_POST['id']); //vem escondido no formulário
$descricao=$_POST['descricao'];
$data=addslashes($_POST['data']);
echo $sql="Insert into reservas (reservaId,reservaData,reservaDescricao,reservaEstabelecimentoId,reservaPerfilId)
                                values(0,'".$data."','" . $descricao . "','" . $idEst . "','" . $idPer . "');";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

header("location:listaReserva.php?id=$idPer");
bot();
?>



