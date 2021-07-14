<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$localidade = addslashes($_POST['localidade']);
$password = md5(addslashes($_POST['pass']));
$Spassword = md5(addslashes($_POST['Spass']));


if (isset($password) and isset($Spassword)) {
    if ($password == $Spassword) {

        $sql = "insert into perfis(perfilId, perfilNome, perfilLocalidade,perfilAvatar, perfilEmail, perfilEstado, perfilPassword, perfilAdmin) values(0,'$nome','$localidade','imagens/user.png','$email','ativo','$Spassword','utilizador')";
        $result = mysqli_query($con, $sql);
        $lastId = mysqli_insert_id($con);
        session_start();
        $_SESSION['id'] = $lastId;
        $_SESSION['nome'] = $nome;
        header("location:novoperfil.php?id={$lastId}");
    } else {
        header("location:index.php?ero");
    }
}
?>