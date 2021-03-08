<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$distrito = addslashes($_POST['distrito']);
$sql ="INSERT INTO distritos VALUES (0,'".$distrito."')";
$result = mysqli_query($con, $sql);
?>
