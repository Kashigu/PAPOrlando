<?php
include_once("../includes/body.inc.php");

$id = $_POST['id'];
$old = addslashes($_POST['password']);
$old=md5($old);


$sql2 = "select perfilPassword from perfis where perfilId = " . $id;
$passe = mysqli_query($con, $sql2);
$resultado = mysqli_fetch_array($passe);



    if ($old <> $resultado['perfilPassword']) {
        return $resultado['perfilPassword'];
    }
        echo mysqli_affected_rows($con);

?>
