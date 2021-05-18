<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$categoria=intval($_POST['categoria']);
$distrito=intval($_POST['distrito']);
$novo=intval($_POST['novo']);


$resultado_por_pagina = 9;

$sql= "
                    select *
                    from distritos inner join estabelecimentos 
                    on distritoId=estabelecimentoDistritoId
                    INNER JOIN categorias
                    on categoriaId=estabelecimentoCategoriaId where 1 ";
if($txt!='')
    $sql.=" and estabelecimentoNome LIKE '%$txt%'";
if($categoria!=-1)
    $sql.=" and categoriaId=$categoria";
if($distrito!=-1)
    $sql.=" and distritoId =$distrito";
$sql;

$resultado= mysqli_query($con,$sql);
$numero_de_resultados = mysqli_num_rows($resultado);


$numero_de_paginas= ceil ($numero_de_resultados/$resultado_por_pagina);


if(!isset($_GET['pagina'])){
    $pagina=1;
} else {
    $pagina =$_GET['pagina'];
}

$esta_pagina_primeiro_resultado = ($pagina-1)*$resultado_por_pagina;

    $sql="
                    select *
                    from distritos inner join estabelecimentos 
                    on distritoId=estabelecimentoDistritoId
                    INNER JOIN categorias
                    on categoriaId=estabelecimentoCategoriaId where 1";
    if($txt!='')
        $sql.=" and estabelecimentoNome LIKE '%$txt%' ";
    if($categoria!=-1)
        $sql.=" and categoriaId=$categoria ";
    if($distrito!=-1){
        $sql.=" and distritoId =$distrito ";
        }
    if ($novo!=-1){
        $sql.=" order by estabelecimentoId desc ";
    }
    $sql.=" LIMIT " . $esta_pagina_primeiro_resultado . ',' . $resultado_por_pagina;
    echo $sql;

$resultEstabelecimentos = mysqli_query($con, $sql);
while ($dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)) {
    ?>
    <div class="col-lg-4 col-sm-6">
        <a class="arrange-items"
           href="single-listing.php?id=<?php echo $dadosEstabelecimentos['estabelecimentoId'] ?>">
            <div class="arrange-pic">
                <img class="centrinho"
                     src="<?php echo $dadosEstabelecimentos['estabelecimentoMiniaturaURL'] ?>"
                     alt="">
                <div class="rating">4.9</div>
                <div class="tic-text"><?php echo $dadosEstabelecimentos['categoriaNome'] ?></div>
            </div>
            <div class="arrange-text">
                <h5><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></h5>
                <span><?php echo $dadosEstabelecimentos['estabelecimentoLocalidade'] ?></span>
                <p><?php echo $dadosEstabelecimentos['estabelecimentoSlogan'] ?></p>
                <div class="open tomorrow">Abre amanhã às 10 da manhã</div>
            </div>
        </a>
    </div>
    <?php

}
?>
<div class="col-lg-12 text-right">
    <div class="pagination-num">
        <?php
        for ($pagina=1;$pagina<=$numero_de_paginas;$pagina++){
            echo '<a href="procurar.php?pagina=' . $pagina . '">' . $pagina . '</a>';
        }
        ?>
    </div>
</div>

