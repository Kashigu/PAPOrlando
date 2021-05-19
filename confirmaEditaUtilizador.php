<?php
include_once("includes/body.inc.php");
$nome = addslashes($_POST['perfilNome']);
$localidade = addslashes($_POST['perfilLocalidade']);
$old = addslashes($_POST['perfilOld']);
$palavra = addslashes($_POST['perfilPalavra']);
$Comf = addslashes($_POST['ConfirmaperfilPalavra']);
$email = $_POST['perfilEmail'];
$id = $_POST['id'];
$imagem = $_FILES['perfilAvatar']['name'];
$novoNome = "imagens/" . $imagem;


$sql2 = "select perfilPassword from perfis where perfilId = " . $id;
$passe = mysqli_query($con, $sql2);
$resultado = mysqli_fetch_array($passe);

if (isset($old) and isset($palavra)) {
    if ($old == $resultado['perfilPassword']) {
        if ($Comf == $palavra) {
            $sql = "Update perfis set perfilNome='" . $nome . "', perfilLocalidade='" . $localidade . "', perfilEmail='" . $email . "'";

            if ($imagem != '') {
                $sql .= ", perfilAvatar='imagens/" . $imagem . "'";
                copy($_FILES['perfilAvatar']['tmp_name'], $novoNome);
            }
            $sql .= " , perfilPassword='" . $Comf . "' where perfilId=" . $id;
            echo $sql;
            $result = mysqli_query($con, $sql);
            header("location:novoperfil.php?id={$id}");
        }
    }
}


?>

