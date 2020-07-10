<link rel="stylesheet" href="<?=$url?>css/thumbnails.css">
<ul class="thumbnails-mod17">
    <?php $lista = array('Para raio preço','Sistema de proteção de descargas atmosféricas','Quanto custa um para raio residencial','Sistema de aterramento spda','Valor de para raio','Para-raio predial','Sistema de para raios prediais','Spda e aterramento','Sistema de para raios spda','Sistema de proteção contra descargas atmosféricas','Venda de para raios','Proteção contra descargas elétricas','Quanto custa um para raio para residência','Sistema de spda aterramento','Spda predial','Análise de spda','Para raios dps','Spda para condomínios','Spda para prédios','Spda para residência');
     shuffle($lista); for($i=1;$i<13;$i++){ ?>
    <li> <a class="lightbox" href="<?=$url;?>imagens/empresa-de-para-raios/empresa-de-para-raios-<?=$i?>.jpg"
            title="<?=$lista[$i]?>"><img
                src="<?=$url;?>imagens/empresa-de-para-raios/thumbs/empresa-de-para-raios-<?=$i?>.jpg"
                alt="<?=$lista[$i]?>" title="<?=$lista[$i]?>" /></a> </li> <?php } ?></ul>