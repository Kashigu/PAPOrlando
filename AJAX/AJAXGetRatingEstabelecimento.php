<?php
// dados na base de dados               NÃO USADO EM LADO ALGUM
include_once("../includes/body.inc.php");
session_start();
$id=intval($_POST['idRede']);
$sql="Select count(*) as n
        from redes 
        where redeEstabelecimentoId=$id and redeTipo='rating'";

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador gosta da foto

$sql="select * from redes where redePerfilId=".$_SESSION['id']." and redeEstabelecimentoId=".$id." and redeTipo='rating'";
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){
    ?>
    <i class="fa fa-thumbs-up" style="color:yellow" aria-hidden="true"></i>
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