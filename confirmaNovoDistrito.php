<?php
include_once("includes/body.inc.php");


$nome=$_POST['nomeDistrito'];


$sql="insert into distritos(distritoNome) values('".$nome."');";
mysqli_query($con,$sql);
header("location:distritos.php");
?>
