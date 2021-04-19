<?php
include_once("../includes/body.inc.php");

$reservaId=$_POST['categoria'];

$sql= "delete from reservas where reservaId=".$reservaId;


$result = mysqli_query($con,$sql);
?>
