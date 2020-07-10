<?
//Incluir esta categoriasGeral.php nas páginas de produtos.php, index.php, inc/sub-menu.php e inc/mapa-sub-menu

include_once('tratarAcentos.php');


// Adicionar as Categorias do projeto (deixe com acentuação, caso possua)
$categorias = array(
    "empresa-de-para-raios",
    "instalacao-de-para-raio",
    "manutencao-de-para-raios-sp",
    "laudo-de-para-raio",
    "adequacao-do-spda",
    "avcb-para-raios",
    "para-raios"
);


//Categorias com acentos tratados para linkagem na galeria da Home
$i = 0;
foreach ($categorias as $categoriaTratada){
   $tratadas[$i] = trataAcentos($categoriaTratada);
   $i++;
}
?>


