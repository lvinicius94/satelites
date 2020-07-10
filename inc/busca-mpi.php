<h2>produtos e serviços relacionados
</h2>
<ul>
	<?php define ('ROOT', realpath(dirname(__FILE__)).'/');
		$limit = 4;
		include('inc/vetKey-mpi.php');
		include('inc/classes/strFuncoes.class.php');
		$str = new strFuncoes();
		$vetPalavra = $str->RetiraPreposicao($h1);
		$vetKey_PR = $str->buscaVetorAprox($vetPalavra, $vetKey, $limit, $h1);
		foreach ($vetKey_PR as $keyVet => $valSearch)
		{
			$key = $vetKey[$valSearch['id']]["key"];
			if($key == $h1) {
				continue;
			}
			$urlImagem = $vetKey[$valSearch['id']]["urlImagem"];
			$url1 = $vetKey[$valSearch['id']]["url"];
			$urlKeySearch = str_replace("-", "+", $vetKey[$valSearch['id']]["url"]);
			$textKey = $vetKey[$valSearch['id']]['desc'];
			echo "
			<li class=\"row\" >
				<a href=\"".$url1."\" title=\"".$key."\">
					<img src=\"imagens/informacoes/".$urlImagem."\" alt=\"".$key."\" title=\"".$key."\" />
				</a>
				<h3>
				<a href=\"".$url1."\" title=\"".$key."\">".$key."</a>
					</h3>
					
			</li>";
		} ?>
</ul>