<?php
include_once("../includes/body.inc.php");

$estabelecimentoId=$_POST['estabelecimento'];

$sql="delete from estabelecimentos where estabelecimentoId='".$estabelecimentoId."'";


$result = mysqli_query($con,$sql);



?>
