<?php
include_once("../includes/config.inc.php");

$email = addslashes($_POST['email']);
$sql = "select perfilEmail from perfis";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($resultado);


if ($email === $dados['perfilEmail']) {
    echo 'Email já existente';
} else {
    echo 'Email válido';
}
?>

ddddddd
