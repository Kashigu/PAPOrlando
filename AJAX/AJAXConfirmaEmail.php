<?php
include_once("../includes/body.inc.php");

$email=$_POST['email'];

$sql="select * from estabelecimentos where estabelecimentoEmail='$email'";
$result=mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>
