<?php
include_once("../includes/body.inc.php");
$id=$_POST['id'];
$distrito=$_POST['contentModalTextDelete'];
$categoriaId=$_POST['contentModalIdDelete'];

$sql= "delete from categorias where categoriaId='".$categoriaId."'";


$result = mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

?>
