<?
$nomeSite			= 'Portal dos Para-Raios';
$slogan				= 'Simplesmente o melhor do ramo!';

$dir = $_SERVER['SCRIPT_NAME'];
$dir = pathinfo($dir);
$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];
if ($dir["dirname"] == "/") { $url = $http."://".$host."/"; }
else { $url = $http."://".$host.$dir["dirname"]."/";  }


$emailContato		= 'everton.lima@solucoesindustriais.com.br';
$rua				= 'Rua Pequetita, 179';
$bairro				= 'Vila Olimpia';
$cidade				= 'São Paulo';
$UF					= 'SP';
$cep				= 'CEP: 04552-060';
$latitude			= '-22.546052';
$longitude			= '-48.635514';
$idAnalytics		= 'UA-146654932-8';
$senhaEmailEnvia	= '102030'; // colocar senha do e-mail mkt@dominiodocliente.com.br
$explode			= explode("/", $_SERVER['PHP_SELF']);
$urlPagina 			= end($explode);
$urlPagina	 		= str_replace('.php','',$urlPagina);
$urlPagina 			== "index"? $urlPagina= "" : "";
$urlAnalytics = str_replace("http://www.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);
//reCaptcha do Google
$siteKey = '6Lfc7g8UAAAAAHlnefz4zF82BexhvMJxhzifPirv';
$secretKey = '6Lfc7g8UAAAAAKi8al32HjrmsdwoFoG7eujNOwBI';


//Breadcrumbs
include('inc/categoriasGeral.php');
$caminho  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminho .= '<a rel="home" itemprop="url" href="'.$url.'" title="Home">';
$caminho .= '<span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminho .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div>';

$caminho2	 = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminho2	.= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminho2	.= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminho2	.= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminho2	.= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminho2	.= '<span itemprop="title"> Produtos </span></a> »';
$caminho2	.= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminho2	.= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div>';

$caminhoempresa_de_para_raios = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminhoempresa_de_para_raios.= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminhoempresa_de_para_raios.= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminhoempresa_de_para_raios.= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoempresa_de_para_raios.= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminhoempresa_de_para_raios.= '<span itemprop="title"> Produtos </span></a> »';
$caminhoempresa_de_para_raios.= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoempresa_de_para_raios.= '<a href="'.$url.'empresa-de-para-raios-categoria" title="Categoria - Empresa de Para-Raios" class="category" itemprop="url">';
$caminhoempresa_de_para_raios.= '<span itemprop="title"> Categoria - Empresa de Para-Raios </span></a> »';
$caminhoempresa_de_para_raios.= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoempresa_de_para_raios.= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';

$caminhoinstalacao_de_para_raio  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminhoinstalacao_de_para_raio .= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminhoinstalacao_de_para_raio .= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminhoinstalacao_de_para_raio .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoinstalacao_de_para_raio .= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminhoinstalacao_de_para_raio .= '<span itemprop="title"> Produtos </span></a> »';
$caminhoinstalacao_de_para_raio .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoinstalacao_de_para_raio .= '<a href="'.$url.'instalacao-de-para-raio-categoria" title="Categoria - Instalação de Para Raio " class="category" itemprop="url">';
$caminhoinstalacao_de_para_raio .= '<span itemprop="title"> Categoria - Instalação de Para Raio </span></a> »';
$caminhoinstalacao_de_para_raio .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoinstalacao_de_para_raio .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';
    
$caminhomanutencao_de_para_raios_sp  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminhomanutencao_de_para_raios_sp .= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminhomanutencao_de_para_raios_sp .= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminhomanutencao_de_para_raios_sp .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhomanutencao_de_para_raios_sp .= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminhomanutencao_de_para_raios_sp .= '<span itemprop="title"> Produtos </span></a> »';
$caminhomanutencao_de_para_raios_sp .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhomanutencao_de_para_raios_sp .= '<a href="'.$url.'manutencao-de-para-raios-sp-categoria" title="Categoria - Manutenção de para-raios sp " class="category" itemprop="url">';
$caminhomanutencao_de_para_raios_sp .= '<span itemprop="title"> Categoria - Manutenção de para-raios sp </span></a> »';
$caminhomanutencao_de_para_raios_sp .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhomanutencao_de_para_raios_sp .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';
    
$caminholaudo_de_para_raio  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminholaudo_de_para_raio .= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminholaudo_de_para_raio .= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminholaudo_de_para_raio .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminholaudo_de_para_raio .= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminholaudo_de_para_raio .= '<span itemprop="title"> Produtos </span></a> »';
$caminholaudo_de_para_raio .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminholaudo_de_para_raio .= '<a href="'.$url.'laudo-de-para-raio-categoria" title="Categoria - Laudo de Para Raio " class="category" itemprop="url">';
$caminholaudo_de_para_raio .= '<span itemprop="title"> Categoria - Laudo de Para Raio </span></a> »';
$caminholaudo_de_para_raio .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminholaudo_de_para_raio .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';
    
$caminhoadequacao_do_spda  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminhoadequacao_do_spda .= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminhoadequacao_do_spda .= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminhoadequacao_do_spda .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoadequacao_do_spda .= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminhoadequacao_do_spda .= '<span itemprop="title"> Produtos </span></a> »';
$caminhoadequacao_do_spda .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoadequacao_do_spda .= '<a href="'.$url.'adequacao-do-spda-categoria" title="Categoria - Adequação do SPDA " class="category" itemprop="url">';
$caminhoadequacao_do_spda .= '<span itemprop="title"> Categoria - Adequação do SPDA</span></a> »';
$caminhoadequacao_do_spda .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoadequacao_do_spda .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';
    
$caminhoavcb_para_raios  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminhoavcb_para_raios .= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminhoavcb_para_raios .= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminhoavcb_para_raios .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoavcb_para_raios .= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminhoavcb_para_raios .= '<span itemprop="title"> Produtos </span></a> »';
$caminhoavcb_para_raios .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoavcb_para_raios .= '<a href="'.$url.'avcb-para-raios-categoria" title="Categoria - Avcb Para-Raios " class="category" itemprop="url">';
$caminhoavcb_para_raios .= '<span itemprop="title"> Categoria - Avcb Para-Raios </span></a> »';
$caminhoavcb_para_raios .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhoavcb_para_raios .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';
    
$caminhopara_raios  = '<div id="breadcrumb" itemscope itemtype="http://schema.org/Breadcrumb" >';
$caminhopara_raios .= '<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title">';
$caminhopara_raios .= '<i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »';
$caminhopara_raios .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhopara_raios .= '<a href="'.$url.'produtos" title="Produtos" class="category" itemprop="url">';
$caminhopara_raios .= '<span itemprop="title"> Produtos </span></a> »';
$caminhopara_raios .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhopara_raios .= '<a href="'.$url.'para-raios-categoria" title="Categoria - Para Raios " class="category" itemprop="url">';
$caminhopara_raios .= '<span itemprop="title"> Categoria - Para Raios </span></a> »';
$caminhopara_raios .= '<div itemprop="child" itemscope itemtype="http://schema.org/Breadcrumb">';
$caminhopara_raios .= '<strong><span class="page" itemprop="title" > '.$h1.'</span></strong></div></div></div></div>';
    



?>