<ul class="gallery" style="flex-wrap: nowrap;">
	<?php for($i = 1; $i <= $quantia; $i++){
	
        $arquivojpg=dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."imagens/informacoes".DIRECTORY_SEPARATOR.$urlPagina."-".$i.".jpg";
        $arquivojpg0=dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."imagens/informacoes".DIRECTORY_SEPARATOR.$urlPagina."-0".$i.".jpg";
        $arquivopng=dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."imagens/informacoes".DIRECTORY_SEPARATOR.$urlPagina."-".$i.".png";
        $arquivopng0=dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."imagens/informacoes".DIRECTORY_SEPARATOR.$urlPagina."-0".$i.".png";

        if (file_exists($arquivojpg)) {
            $imagem=$url."imagens/informacoes/".$urlPagina."-".$i.".jpg"; 
        } else
        if (file_exists($arquivojpg0)) {
            $imagem=$url."imagens/informacoes/".$urlPagina."-0".$i.".jpg";
        } else
        if (file_exists($arquivopng)) {
            $imagem=$url."imagens/informacoes/".$urlPagina."-".$i.".png";
        } else
        if (file_exists($arquivopng0)) {
            $imagem=$url."imagens/informacoes/".$urlPagina."-0".$i.".png";
        } else {
            $imagem=$url."assets/img/logo.png";                        
        }
        
	?>
	<li class='col-md-4 col-12 p-1 text-center'>
		<a href="<?=$imagem;?>" data-fancybox="group1" class="lightbox justify-content-center" title="<?=$h1;?>" data-caption="<?=$h1;?>" >
			<img src="<?=$imagem;?>" alt="<?=$h1;?>" title="<?=$h1;?>" itemprop="image" class="img-thumbnail" style="max-width:100%;" />
		</a>
	</li>

	<?php } ?>
    
</ul>

<a class="fancybox" data-fancybox-group="group1"></a>