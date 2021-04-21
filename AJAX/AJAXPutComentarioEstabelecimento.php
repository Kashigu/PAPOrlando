<?php
// dados na base de dados
include_once("../includes/body.inc.php");

session_start();
$idCom=intval($_POST['idComentar']);
$id=intval($_POST['idEstabelecimento']);
$sobre = $_POST['reviewTexto'];

  echo $sql="select * from comentarios inner join estabelecimentos on estabelecimentoId=comentarioEstabelecimentoId
                                  inner join perfis on perfilId=comentarioPerfilId where comentarioPerfilId=".$_SESSION['id']." and comentarioEstabelecimentoId=". $id;
mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0) {
   echo $sql = "delete from comentarios where comentarioPerfilId=" . $_SESSION['id'] . " and comentarioEstabelecimentoId=".$id." and comentarioId=".$idCom;

}else{
   echo  $sql = "insert into comentarios (comentarioId, comentarioEstabelecimentoId, comentarioPerfilId, comentarioTexto) values(0,'" . $id . "','".$_SESSION['id']. "','" . $sobre . "')";

}
mysqli_query($con,$sql);

bot();
?>
