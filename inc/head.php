<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8">
	<? include('inc/geral.php'); ?>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/normalize.css" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<script src="<?=$url?>js/jquery-1.9.0.min.js"></script>
	<!-- MENU  MOBILE -->

	<!-- /MENU  MOBILE -->
	<title><?= mb_strlen($title." - ".$nomeSite, 'UTF-8') < 65 ? $title." - ".$nomeSite : $title; ?></title>
	<base href="<?=$url?>">
	<meta name="description" content="<?=ucfirst($desc)?>">
	<meta name="keywords" content="<?=$h1.", ".$key?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="geo.position" content="<?=$latitude.";".$longitude?>">
	<meta name="geo.placename" content="<?=$cidade."-".$UF?>">
	<meta name="geo.region" content="<?=$UF?>-BR">
	<meta name="ICBM" content="<?=$latitude.";".$longitude?>">
	<meta name="robots" content="index,follow">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<link rel="canonical" href="<?=$url.$urlPagina?>">
	<?php
	//	if ( $author == ''){ echo '<meta name="author" content="'.$nomeSite.'">'; }
	//	else{ echo '<link rel="author" href="'.$author.'">'; }
	?>

	<link rel="shortcut icon" href="<?=$url?>imagens/img-home/favicon.png">

	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?=$title." - ".$nomeSite?>">
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?=$url.$urlPagina?>">
	<meta property="og:description" content="<?=$desc?>">
	<meta property="og:site_name" content="<?=$nomeSite?>">
	<meta property="fb:admins" content="<?=$idFacebook?>">
