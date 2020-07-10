<?
	$h1 = "Produtos";
	$title = "Produtos";
	$desc = "Encontre diversos fornecedores Placa de Sinalização, Máquina de Codificação e Ribbon, cote agora mesmo!";
	$var = "Produtos";
	include('inc/head.php');
	include('inc/categoriasGeral.php');
?>
	</head>
	<body>
	<? include('inc/topo.php');?>
	<div class="wrapper">
	 	<main>
	 		<div class="content">
	 			<div id="breadcrumb" itemscope itemtype="https://data-vocabulary.org/breadcrumb">
	 				<a rel="home" itemprop="url" href="<?=$url?>" title="home">
	 					<span itemprop="title">
	 						<i class="fa fa-home" aria-hidden="true"></i>Home
	 					</span>
	 				</a> »
					<strong><span class="page" itemprop="title">Produtos</span></strong>
	 			</div>


				<h1>Produtos</h1>
				<article class="full">
					<p>Encontre o melhor fornecedor de <?=ucwords(str_replace("-", " ", $categorias[0]));?> agora mesmo!</p>
					<ul class="thumbnails-main">

					<?

							
   				 foreach ($categorias as $categoria){					
      				 $categoriaSemAcento = trataAcentos($categoria);
       				 $categoriaEspaco = str_replace("-", " ", $categoria);
       				 $categoriaEspacoUpper = mb_strtoupper($categoriaEspaco);
      			  echo "<li>
           			<a rel=\"nofollow\" href=\"$url".$categoriaSemAcento."-categoria\" title=\"$categoriaEspacoUpper\">
              		<img src=\"$url"."imagens/$categoriaSemAcento/$categoriaSemAcento-1.jpg\" alt=\"$categoriaEspacoUpper\" title=\"$categoriaEspacoUpper\"/>
        		  	</a>
            		<h2>
            		<a href=\"$url".$categoriaSemAcento."-categoria\" title=\"$categoriaEspacoUpper\"/>$categoriaEspaco</a>
            		</h2>
					</li>";
					}
					   
		
					?>

					</ul>
				</article>
	 		</div>
	 	</main>
	 </div>
	 <? include('inc/footer.php');?>
	</body>
</html>
