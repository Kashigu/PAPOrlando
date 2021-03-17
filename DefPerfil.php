<?php
include_once("includes/body.inc.php");
toputili();

?>

<?php

$id=intval($_GET['id']);
$sql = "select * from perfis where perfilId=".$id;
$resultPerfis = mysqli_query($con, $sql);
$dadosPerfis = mysqli_fetch_array($resultPerfis)
?>

<section class="contact-section spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="novoperfil.php" class="contact-form" method="post" enctype="multipart/form-data"> <!-- (class importante ) falta poder clicar na imagem para trocar!-->

                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div>
                        <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>" class="center">
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" placeholder="<?php echo $dadosPerfis['perfilNome'] ?>">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" placeholder="<?php echo $dadosPerfis['perfilEmail'] ?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="<?php echo $dadosPerfis['perfilLocalidade'] ?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Atual Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Comfirmação Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <button type="submit">Confirmar alterações </button>
                        </div>
                </form>
                <div class="col-lg-6  contact-form">
                    <button> <a href="index.php" >Eliminar Conta </a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
bottom();
?>
