<?php
include_once("../includes/body.inc.php");

$distritoId=$_POST['distrito'];

$sql="delete from distritos where distritoId='".$distritoId."'";


$result = mysqli_query($con,$sql);



?>
