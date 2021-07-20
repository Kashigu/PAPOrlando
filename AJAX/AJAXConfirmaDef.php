<?php
include_once("../includes/body.inc.php");

$id = $_POST['id'];
$old = addslashes($_POST['password']);
$old=md5($old);


$sql2 = "select perfilPassword from perfis where perfilId = " . $id." and perfilPassword='".$old."'";
mysqli_query($con, $sql2);
echo mysqli_affected_rows($con);

?>
