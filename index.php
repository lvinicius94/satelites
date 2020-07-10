<?
$h1         = 'Para-Raios!';
$title      = 'Página Inicial';
$desc       = 'Se procura por '.$h1.', você encontra nos resultados do Soluções Industriais, receba diversos orçamentos com mais de 100 empresas do Brasil ao';
$var        = 'Home';
include('inc/head.php');
include('inc/palavrasMaisBuscadas.php');
include_once('inc/categoriasGeral.php');
?>

</head>
<body>
<? include('inc/topo.php'); ?>
<section class="cd-hero">
	<div class="title-main"> <h1><?=$h1?></h1></div>
	<ul class="cd-hero-slider autoplay">
		<li class="selected">
			<div class="cd-full-width">
				<h2>Empresa de Para-Raios</h2>
				<p>Com o para-raio trabalhando como um captador de energia da descarga elétrica natural, seu uso tornou-se extremamente necessário e amplo em todas as edificações, estabelecendo segurança ao transeunte e desenvolvendo estabilidade para a construção.</p>
				<a href="<?=$url?>para-raio-predial" class="cd-btn">Saiba mais</a>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<h2> Instalação de Para Raio Residencial</h2>
				<p>Diante da elevada incidência de raios no Brasil, é necessário que todo tipo de edificação receba um sistema de proteção contra descarga elétrica atmosférica, como é o caso da adequação de para-raios.</p>
				<a href="<?=$url?>instalacao-para-raio-residencial" class="cd-btn">Saiba mais</a>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<h2> Manutenção de Para raios</h2>
				<p>Empresa de instalação de para raio irá realizar a montagem, instalação e manutenção de todo o sistema de proteção contra descargas elétricas provindas da atmosfera.</p>
				<a href="<?=$url?>para-raio-preco" class="cd-btn">Saiba mais</a>
			</div>
		</li>

	</ul>
	<div class="cd-slider-nav">
		<nav>
			<span class="cd-marker item-1"></span>
			<ul>
				<li class="selected"><a href="#0"><i class="far fa-circle" aria-hidden="true"></i></a></li>
				<li><a href="#0"><i class="far fa-circle" aria-hidden="true"></i></a></li>
				<li><a href="#0"><i class="far fa-circle" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
	</div>
</section>
<main>
	<section class="wrapper-main">
		<div class="main-center">
			<div class="quadro-2">
				<h2 class="border-left">Temos o que você necessita para Para-Raios</h2>
				<div class="div-img">
					<p data-anime="left-0">
					Receba diversas cotações Catraca e Para-Raios, e realize um orçamento hoje mesmo com aproximadamente 200 distribuidores de todo o Brasil gratuitamente a sua escolha.
					</p>
				</div>
				<div class="gerador-svg" data-anime="in">
					<img src="imagens/empresa-de-para-raios/empresa-de-para-raios-2.jpg" alt="Catraca e Para-Raios" title="Catraca e Para-Raios">
				</div>
			</div>
			<div class=" incomplete-box">
				<h2>Saiba onde encontrar e utilizar este produto</h2>
				<p>
				Receba uma cotação equipamentos para Catraca e Para-Raios  Você consegue nos resultados do Soluções Industriais, faça um orçamento online com aproximadamente 500 distribuidores gratuitamente para todo o Brasil:
				</p>

				<ul data-anime="in">
					

				<!-- ------------------------------! LISTA DE PRODUTOS MAIS BUSCADOS ------------------------------>
				<?

				foreach ($palavrasMaisBuscadas as $palavra){
					echo "<li><a href=\"".$url.trataAcentos($palavra)."\"><i class=\"fas fa-long-arrow-alt-right\"></i>"." ".ucwords(str_replace("-", " ", $palavra))."</a> </li>";
					};
				?>
				<!-- ------------------------------! //LISTA DE PRODUTOS MAIS BUSCADOS ------------------------------>
					
					
				</ul>
				<a href="<?$url?>produtos">
					<span class="btn-4" data-anime="up"> Orçamento Grátis </span>
				</a>
			</div>
		</div>
		<div id="content-icons">
			<div class="co-icon">
				<div class="quadro-icons" data-anime="up">
					<i class="fas fa-building fa-7x"></i>
					<div>
						<p>Cote com diversas empresas</p>
					</div>
				</div>
			</div>
			<div class="co-icon">
				<div class="quadro-icons" data-anime="up">
					<i class="fas fa-dollar-sign fa-7x"></i>
					<div>
						<p>Compare preços</p>
					</div>
				</div>
			</div>
			<div class="co-icon">
				<div class="quadro-icons" data-anime="up">
					<i class="fas fa-handshake fa-7x"></i>
					<div>
						<p>Faça o melhor negócio</p>
					</div>
				</div>
			</div>
			<div class="co-icon">
				<div class="quadro-icons" data-anime="up">
					<i class="fas fa-clock fa-7x"></i>
					<div>
						<p>Economize tempo</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper-img" style="margin-top: 0;">
		<div class="txtcenter">
			<h2 class="border-left" data-anime="left-0">Produtos Relacionados</h2>
		</div>
		<div class="content-icons">
			<div class="produtos-relacionados-1 overlay">
				<figure>
					<a href="<?=$url.$tratadas[0]?>-categoria">
						<div class="fig-img">
							<h2><?=ucwords(str_replace("-", " ",$categorias[0]));?></h2>
							<div class="saiba-mais">
								<span class="btn-saiba-mais">Saiba mais</span>
							</div>
						</div>
					</a>
				</figure>
			</div>
			<div class="produtos-relacionados-2 overlay">
				<figure class="figure2">
					<a href="<?=$url.$tratadas[1]?>-categoria">
						<div class="fig-img2">
							<h2 class="concerto-maquina"><?=ucwords(str_replace("-", " ",$categorias[1]));?></h2>
							<div class="saiba-mais-2">
								<span class="btn-saiba-mais">Saiba mais</span>
							</div>
						</div>
					</a>
				</figure>
			</div>
			<div class="produtos-relacionados-3 overlay">
				<figure>
					<a href="<?=$url.$tratadas[2]?>-categoria">
						<div class="fig-img">
						<h2><?=ucwords(str_replace("-", " ",$categorias[2]));?></h2>
							<div class="saiba-mais">
								<span class="btn-saiba-mais">Saiba mais</span>
							</div>
						</div>
					</a>
				</figure>
			</div>
		</div>
	</section>
	<section class="wrapper-destaque">
		<div class="destaque txtcenter">
			<h2 class="border-left" data-anime="left-0">Galeria de Produtos</h2>
			<div class="center-block txtcenter">
				<ul class="gallery">



			<!-- --------------------------- GALERIA --------------------------- -->	
				<?
				$z = 0;
				$totalCategorias = count($tratadas);
				for($j = 0; $j < 10; $j++){
					echo 
					"<li>
						<a href=\"$url/imagens/".$tratadas[$z]."/".$tratadas[$z]."-".($j+1).".jpg\" class=\"lightbox\" title=\"".ucwords(str_replace("-", " ", $categorias[$z]))."\">
							<img src=\"$url/imagens/".$tratadas[$z]."/".$tratadas[$z]."-".($j+1).".jpg\" title=\"".ucwords(str_replace("-", " ", $categorias[$z]))."\" alt=\"".ucwords(str_replace("-", " ", $categorias[$z]))."\">
						</a>
					</li>";
					$z++;
					if($z == $totalCategorias){
						$z = 0;
					}
				};
	
					?>

			<!-- --------------------------- /GALERIA --------------------------- -->	
				</ul>
			</div>
		</div>
	</section>
</main>
<?
	include('inc/footer.php');
	include('inc/fancy.php');
?>
<script src="<?=$url?>hero/js/modernizr.js"></script>
<script src="<?=$url?>hero/js/main.js"></script>
</body>
</html>
