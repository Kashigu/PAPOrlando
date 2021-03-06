<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$distrito = $_POST['distritoNome'];
$id = intval($_GET['distritoId']);


$sql ="UPDATE distritos set distritoNome ='".$distrito."' where distritoId='$id'";

$result = mysqli_query($con, $sql);
$dados=mysqli_fetch_array($result);
?>
