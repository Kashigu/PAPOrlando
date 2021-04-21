<?php
// dados na base de dados
include_once("../includes/body.inc.php");
session_start();
$id=intval($_POST['idEstabelecimento']);
echo $sql="Select count(*) as n
        from comentarios
        where comentarioEstabelecimentoId=$id and comentarioPerfilId=".$_SESSION['id'];

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador gosta da foto
ECHO $sql="select * from comentarios 
                          where comentarioPerfilId=".$_SESSION['id']." and comentarioEstabelecimentoId=".$id;
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){
    ?>
    <i class="fa fa-thumbs-up" style="color:blue" aria-hidden="true"></i>
    <?php
}else{
    ?>
    <i class="fa fa-thumbs-up" style="color:red" aria-hidden="true"></i>
    <?php
}
?>

</span>
 <?php

?>