<?php
include_once("../includes/body.inc.php");

$numero=$_POST['numero'];

$sql="select * from estabelecimentos where estabelecimentoTelefone='$numero'";
$result=mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>
