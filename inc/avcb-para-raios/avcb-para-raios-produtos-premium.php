<ul class="thumbnails">
    <? 
    $random = array(); $limit = 4;
    $random[0] = "<li><img src=\"imagens/thumbs/avcb-para-raios_11472_218908_1566398267653_cover.jpg\" alt=\" AVCB para-raios\" title=\" AVCB para-raios\"/><p><b>REMA</b> / São Paulo - SP</p><h2> AVCB para-raios</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" AVCB para-raios\">COTAR AGORA</a></li>";

    $random[1] = "<li><img src=\"imagens/thumbs/laudo-avcb_11472_218933_1566407457056_cover.jpg\" alt=\" Laudo AVCB\" title=\" Laudo AVCB\"/><p><b>GRAVURAS INDUSTRIAIS DAGER</b> / São Paulo - SP</p><h2> Laudo AVCB</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Laudo AVCB\">COTAR AGORA</a></li>";

    $random[2] = "<li><img src=\"imagens/thumbs/laudo-avcb-preco_11472_218934_1566407970242_cover.jpg\" alt=\"Laudo AVCB preço\" title=\"Laudo AVCB preço\"/><p><b>TNJA – Montagens Elétricas</b> / Jundiaí - SP</p><h2>Laudo AVCB preço</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\"Laudo AVCB preço\">COTAR AGORA</a></li>";

    $random[3] = "<li><img src=\"imagens/thumbs/montagem-de-para-raios-em-sp_11131_219604_1567543615804_cover.jpg\" alt=\" Montagem de pára raios em SP\" title=\" Montagem de pára raios em SP\"/><p><b>Cortezip</b> / Barueri - SP</p><h2> Montagem de pára raios em SP</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Montagem de pára raios em SP\">COTAR AGORA</a></li>";
    shuffle(
        $random); for($i = 0; $i < $limit; $i++) { print 
        $random[$i]; } ?>
</ul>