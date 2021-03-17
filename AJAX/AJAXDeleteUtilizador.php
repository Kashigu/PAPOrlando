<?php
include_once("../includes/body.inc.php");

$perfilId=$_POST['perfil'];

$sql="delete from perfis where perfilId='".$perfilId."'";


$result = mysqli_query($con,$sql);



?>
