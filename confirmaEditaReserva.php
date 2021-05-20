<?php
//------------------------------------------------------------- Não consegui -------------------------------------//

include_once("includes/body.inc.php");
session_start() ;
$id=intval($_POST['id']);
$reserva = addslashes($_POST['reservaDescricao']);
$idR=intval($_POST['reservaId']);

// $sql ="UPDATE categorias set categoriaNome ='".$categoria."'and categoriaImagemURL='".$novoNome."' where categoriaId='$id'";


echo $sql="Update reservas set reservaDescricao='$reserva' where reservaId=$idR";

$result = mysqli_query($con, $sql);
mysqli_query($con,$sql);
header("location:listaReserva.php?id={$id}");
?>
