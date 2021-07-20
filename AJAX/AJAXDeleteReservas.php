<?php
include_once("../includes/body.inc.php");

$reservaId=$_POST['reserva'];

$sql="select reservaPerfilId from reservas where reservaId=".$reservaId;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);

$sql= "delete from reservas where reservaId=".$reservaId;


$result = mysqli_query($con,$sql);
echo intval($dados[0]); // tem que ser o id que estamos a ver, ou seja o id do perfil DONO dessa reservo
?>
