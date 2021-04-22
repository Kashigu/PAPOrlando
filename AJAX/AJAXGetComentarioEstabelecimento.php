<?php
// dados na base de dados
include_once("../includes/body.inc.php");
session_start();
$id=intval($_POST['idEstabelecimento']);
 $sql="Select count(*) as n
        from comentarios
        where comentarioEstabelecimentoId=$id and comentarioPerfilId=".$_SESSION['id'];

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

// verifica se o utilizador gosta da foto
ECHO $sql="select * from comentarios 
                          where comentarioPerfilId=".$_SESSION['id']." and comentarioEstabelecimentoId=".$id;
mysqli_query($con,$sql);

   echo  $sql1="select * from comentarios inner join estabelecimentos on estabelecimentoId=comentarioEstabelecimentoId
                                    inner join perfis on perfilId=comentarioPerfilId
                                    where estabelecimentoId=".$id;
    $resultDados =mysqli_query($con,$sql1);
    $dadosResult =mysqli_fetch_array($resultDados)
?>

    <div class="client-text mt-2">
        <h5><?php echo $dadosResult['perfilNome'] ?></h5>
    </div>
    <p class="mt-3"><?php echo $dadosResult['comentarioTexto'] ?></p>
    <hr>

</span>
 <?php

?>