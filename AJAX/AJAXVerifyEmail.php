<?php
include_once("../includes/config.inc.php");

$txt= addslashes($_POST['txt']);
$sql = "select perfilEmail from perfis";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($resultado);


if ($txt === $dados['perfilEmail']) {
    echo 'Email já existente';
} else {
    echo 'Email válido';
}
?>
