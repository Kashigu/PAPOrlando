<?php
include_once("includes/body.inc.php");

$resultado_por_pagina = 9;

$sql= "Select * from estabelecimentos";
$resultado= mysqli_query($con,$sql);
$numero_de_resultados = mysqli_num_rows($resultado);


$numero_de_paginas= ceil ($numero_de_resultados/$resultado_por_pagina);


if(!isset($_GET['pagina'])){
    $pagina=1;
} else {
    $pagina =$_GET['pagina'];
}

$esta_pagina_primeiro_resultado = ($pagina-1)*$resultado_por_pagina;


$sql="Select * from estabelecimentos LIMIT " . $esta_pagina_primeiro_resultado . ',' . $resultado_por_pagina;
$result=mysqli_query($con,$sql);

while ($row =mysqli_fetch_array($result)){
    echo $row['estabelecimentoId'] . ' ' . $row['estabelecimentoNome'] .'<br>';
}

for ($pagina=1;$pagina<=$numero_de_paginas;$pagina++){
    echo '<a href="teste.php?pagina=' . $pagina . '">' . $pagina . '</a>';
}
?>

