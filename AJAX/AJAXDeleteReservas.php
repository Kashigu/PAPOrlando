<?php
include_once("../includes/body.inc.php");

$reservaId=$_POST['reserva'];

$sql= "delete from reservas where reservaId=".$reservaId;


$result = mysqli_query($con,$sql);
echo 1; // tem que ser o id que estamos a ver, ou seja o id do perfil DONO dessa reservo
?>
