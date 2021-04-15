<?php
// dados na base de dados
include_once("../includes/body.inc.php");
toposingle();
$id=intval($_POST['idEstabelecimento']);
$sql="Select count(*) as n
        from redes 
        where redeEstabelecimentoId=$id";

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador gosta da foto
$sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=".$id." and redeTipo='favorito'";
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){
    ?>
    <i class="fa fa-thumbs-up" style="color: red" aria-hidden="true"></i>
    <?php
}else{
    ?>
    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
    <?php
}
?>

</span>
 <?php

?>