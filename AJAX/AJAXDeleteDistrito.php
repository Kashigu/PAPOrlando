<?php
include_once("../includes/body.inc.php");
$id=$_POST['id'];
$distrito=$_POST['contentModalTextDelete'];
$distritoId=$_POST['contentModalIdDelete'];

$sql= "delete from distritos where distritoId='".$distritoId."'";


$result = mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);


?>
