<footer>
	<div class="wrapper">
		<div class="contact-footer">
			<address>
				<span><?=$nomeSite." - ".$slogan?></span>
			</address>
		</div>
		<div class="menu-footer">
			<nav>
				<ul>
					<li><a rel="nofollow" href="<?=$url?>" title="Página inicial">Início</a></li>
					<li><a rel="nofollow" href="<?=$url?>sobre-nos" title="Sobre Nós">Sobre Nós</a></li>
					<li><a rel="nofollow" href="<?=$url?>produto" title="Produtos">Produtos</a></li>

					<li><a href="<?=$url?>mapa-site" title="Mapa do site <?=$nomeSite?>">Mapa do site</a></li>
				</ul>
			</nav>
		</div>
		<br class="clear">
	</div>
</footer>
<div class="copyright-footer">
	<div class="wrapper-footer">
		Copyright © <?=$nomeSite?>. (Lei 9610 de 19/02/1998)
		<div class="center-footer">
			<img style="width: 30%;" src="imagens/img-home/logo-footer.png" alt="<?=$nomeSite?>" title="<?=$nomeSite?>">
			<p class="footer-p">é um parceiro</p>
			<img src="imagens/logo-solucs.png" alt="Soluções Industriais" title="Soluções Industriais">
		</div>
		<div class="selos">
			<a rel="noopener nofollow" href="http://validator.w3.org/check?uri=<?=$url.$urlPagina?>" target="_blank" title="HTML5 W3C"><i class="fab fa-html5"></i> <strong>W3C</strong></a>
			<a rel="noopener nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=<?=$url.$urlPagina?>" target="_blank" title="CSS W3C" ><i class="fab fa-css3"></i> <strong>W3C</strong></a>
		</div>
	</div>
</div>
<a id="scrollUp" href="#top" style="bottom:-80px;"><i class="fa fa-chevron-up fa-lg" aria-hidden="true"></i></a>

<script defer src="<?=$url?>js/jquery.slicknav.js"></script>
<script><? include ("js/modernizr-2.6.2.min.js");?></script>
<script><? include ("js/click-actions.js");?></script>
<?php include 'inc/fancy.php'; ?>

<!-- Shark Orcamento -->
<div id="sharkOrcamento" style="display: none;"></div>
<script>
	var guardar = document.querySelectorAll('.botao-cotar');
		for(var i = 0; i < guardar.length; i++){
		guardar[i].removeAttribute('href');
  var adicionando = guardar[i].parentNode;
	adicionando.classList.add('nova-api');
};
</script>

<script src="//code.jivosite.com/widget/yhoDeRybmr" async></script> 
<app-cotacao-solucs
appConfig='{"btnOrcamento": ".botao-cotar", "titulo": "h2", "industria": "solucoes-industriais", "container":"nova-api"}'
></app-cotacao-solucs>
<link rel="stylesheet" href="https://sdk.solucoesindustriais.com.br/dist/sdk-cotacao-solucs/styles.css">
<script src="https://sdk.solucoesindustriais.com.br/dist/sdk-cotacao-solucs/package-es5.js?v=<?= date_timestamp_get(date_create()); ?>" nomodule defer></script>
<script src="https://sdk.solucoesindustriais.com.br/dist/sdk-cotacao-solucs/package-es2015.js?v=<?= date_timestamp_get(date_create()); ?>" type="module"></script>
<!-- <script>
	pluginOrcamentoJs.init({
	  industria: 'solucoes-industriais',
	  btnOrcamento: '.botao-cotar',
	  titulo: '#sharkOrcamento'
	});
	$('.botao-cotar').on('click', function() {
	  var title = $(this).attr('title');
	  $('#sharkOrcamento').html(title.trim());
	});
</script> -->
<!-- Google Analytics -->
<? include('inc/LAB.php'); ?>
<script>
  $(window).load(function() {
		(function(i,s,o,g,r,a,m){
			i['GoogleAnalyticsObject']=r;
			i[r]=i[r] || function(){(
			i[r].q=i[r].q||[]).push(arguments)},
			i[r].l=1*new Date();
			a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];
			a.async=1;
			a.src=g;
			m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', '<?=$idAnalytics?>', 'auto');
			ga('create', 'UA-47730935-51', 'auto', 'clientTracker');
			ga('send', 'pageview');
			ga('clientTracker.send', 'pageview');
      $LAB
        .script("js/geral.js").wait()
        .script("js/app.js").wait()
    });
</script>
<!-- window.performance -->
<script>
  var myTime = window.performance.now();
  var items = window.performance.getEntriesByType('mark');
  var items = window.performance.getEntriesByType('measure');
  var items = window.performance.getEntriesByName('mark_fully_loaded');
  window.performance.mark('mark_fully_loaded');
  window.performance.measure('measure_load_from_dom', 'mark_fully_loaded');
  window.performance.clearMarks();
  window.performance.clearMeasures('measure_load_from_dom');
</script>
<!-- scrollup -->
<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			if($(window).scrollTop() > 300){
				$("#scrollUp").attr("style", "bottom:0;transition:0.5s;");
			}
			else{
				$("#scrollUp").attr("style", "bottom:-80px;transition:0.5s;");
			}
		});
		$("#scrollUp").click(function() {
			$('html, body').animate({ scrollTop: 0 }, 800);
			return false;
		});
	});
</script>
