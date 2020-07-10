
<?
include('inc/categoriasGeral.php');

foreach($categorias as $categoriaSubMenu){
	$categoria = trataAcentos($categoriaSubMenu);
    $categoriaEspacoSubMenu = str_replace("-", " ", $categoriaSubMenu);
	$categoriaEspacoSubMenuUpper = mb_strtoupper($categoriaEspacoSubMenu);
	
	echo "<li class=\"dropdown-2\">
	<a href=\"$url"."$categoria-categoria\" title=\"$categoriaEspacoSubMenuUpper\">$categoriaEspacoSubMenuUpper</a>
	<ul class=\"sub-menu2 lista-interna\">";
	include("inc/$categoria/$categoria-sub-menu.php");
	echo "</ul></li>";
}
?>







