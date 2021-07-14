<?php
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);
$categoria = intval($_POST['categoria']);
$distrito = intval($_POST['distrito']);
$novo = intval($_POST['recente']);

$pagina = intval($_POST['pag']);
$rating = floatval($_POST['rating']);


//print_r($_POST);
//$novo;

    $sql = "select estabelecimentos.*, categoriaNome, ifnull(tabela.medRating,' NR') as rating
from estabelecimentos left join categorias
                        on categoriaId=estabelecimentoCategoriaId left join 
(
	select redeEstabelecimentoId, round(avg(ratingValor),1) as medRating
	from redes inner join ratings on redeId=ratingRedeId
	group by 1
	) as tabela
on estabelecimentoId=redeEstabelecimentoId
 where 1";

    if ($txt != '')
        $sql .= " and estabelecimentoNome LIKE '%$txt%' ";
    if ($categoria != -1)
        $sql .= " and estabelecimentoCategoriaId=$categoria ";
    if ($distrito != -1)
        $sql .= " and estabelecimentoDistritoId =$distrito ";
    if ($rating !=-1){
       // $rating-=0.5;
        $sql.= " having rating<>'NR' && rating >= $rating";
    }

    $resultado=mysqli_query($con,$sql);
    $numero_de_resultados = mysqli_num_rows($resultado);
    $numero_de_paginas = ceil($numero_de_resultados / REGISTOSPORPAGINA);
    $esta_pagina_primeiro_resultado = ($pagina - 1) * REGISTOSPORPAGINA;



    if ($novo == 1)
        $sql .= " order by estabelecimentoId asc ";
    if ($novo == 2)
        $sql .= " order by estabelecimentoId desc ";
    if ($novo == 3){
        $sql .= " order by rating desc ";
    }


    $sql .= " LIMIT " . $esta_pagina_primeiro_resultado . ',' . REGISTOSPORPAGINA;

   // $sql;
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
                <div class="rating"><?php echo $dadosEstabelecimentos['rating']?></div>
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
        if ($numero_de_paginas > 1)
            for ($pagina = 1; $pagina <= $numero_de_paginas; $pagina++) {
                echo "<a onclick=\"fillTableEstabelecimentosProcurar($('#searchEstabelecimento').val(), $('#searchCategoria').val(),  $('#searchDistrito').val(),".$pagina.",$('#searchOptions').val());\"  href=\"#\">" . $pagina . "</a>";
            }
        ?>
    </div>
</div>

