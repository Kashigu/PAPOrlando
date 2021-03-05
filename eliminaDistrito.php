<?php
print_r($_POST);
include_once("includes/body.inc.php");
$id=intval($_POST['id']);
$sql= "delete from distritos where distritoId=".$id;
mysqli_query($con,$sql);
header("location:distritos.php");


?>
