<?php
include_once("includes/body.inc.php");
$nome = addslashes($_POST['perfilNome']);
$localidade = addslashes($_POST['perfilLocalidade']);
$email = $_POST['perfilEmail'];
$id = $_POST['id'];
$imagem = $_FILES['perfilAvatar']['name'];
$novoNome = "imagens/" . $imagem;


$sql2 = "select perfilPassword from perfis where perfilId = " . $id;
$passe = mysqli_query($con, $sql2);
$resultado = mysqli_fetch_array($passe);



            $sql = "Update perfis set perfilNome='" . $nome . "', perfilLocalidade='" . $localidade . "', perfilEmail='" . $email . "'";

            if ($imagem != '') {
                $sql .= ", perfilAvatar='imagens/" . $imagem . "'";
                copy($_FILES['perfilAvatar']['tmp_name'], $novoNome);
            }

            if($_POST['perfilPalavra']!=''){
                $palavra = md5(addslashes($_POST['perfilPalavra']));
                $sql.=", perfilPassword='" . $palavra."' ";
            }
            $sql .= " where perfilId=" . $id;
            echo $sql;
            $result = mysqli_query($con, $sql);
            header("location:novoperfil.php?id={$id}");

?>

?>

