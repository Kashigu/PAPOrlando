<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$id=intval($_POST['idEstabelecimento']);
$txt=addslashes($_POST['txt']);


 echo $sql = "insert into comentarios (comentarioId, comentarioPerfilId, comentarioEstabelecimentoId, comentarioTexto) values(0,'".$_SESSION['id']. "','" . $id."','".$txt."')";
 mysqli_query($con,$sql);



bot();
?>
