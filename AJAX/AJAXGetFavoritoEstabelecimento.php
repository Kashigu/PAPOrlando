<?php
// dados na base de dados
include_once("../includes/body.inc.php");
session_start();
$id=intval($_POST['idEstabelecimento']);
$sql="Select count(*) as n
        from redes 
        where redeEstabelecimentoId=$id and redeTipo='favorito'";

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador gosta da foto
$sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=".$id." and redeTipo='favorito'";
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){
    ?>
    <i class="fa fa-star-o" style="color:deeppink" aria-hidden="true"></i>
    <?php
}else{
    ?>
    <i class="fa fa-star-o" aria-hidden="true"></i>
    <?php
}
?>

</span>
 <?php

?>