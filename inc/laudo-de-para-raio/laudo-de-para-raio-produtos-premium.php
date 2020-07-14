<ul class="thumbnails">
    <? 
    $random = array(); $limit = 4;
    $random[0] = "<li><img src=\"imagens/thumbs/manutencao-para-raios-sp_11029_58720_1537388302537_cover.jpg\" alt=\" Manutenção para raios SP\" title=\" Manutenção para raios SP\"/><p><b>REMA</b> / São Paulo - SP</p><h2> Manutenção para raios SP</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Manutenção para raios SP\">COTAR AGORA</a></li>";

    $random[1] = "<li><img src=\"imagens/thumbs/laudo-de-para-raio_11472_218936_1566408477476_cover.jpg\" alt=\" Laudo de para-raio\" title=\" Laudo de para-raio\"/><p><b>GRAVURAS INDUSTRIAIS DAGER</b> / São Paulo - SP</p><h2> Laudo de para-raio</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Laudo de para-raio\">COTAR AGORA</a></li>";

    $random[2] = "<li><img src=\"imagens/thumbs/laudo-do-sistema-de-protecao-contra-descargas-atmosfericas_11472_218940_1566409675378_cover.jpg\" alt=\"Laudo do sistema de proteção contra descargas atmosféricas\" title=\"Laudo do sistema de proteção contra descargas atmosféricas\"/><p><b>TNJA – Montagens Elétricas</b> / Jundiaí - SP</p><h2>Laudo do sistema de proteção contra descargas atmosféricas</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\"Laudo do sistema de proteção contra descargas atmosféricas\">COTAR AGORA</a></li>";

    $random[3] = "<li><img src=\"imagens/thumbs/montagem-de-para-raios-em-sp_11131_219604_1567543615804_cover.jpg\" alt=\" Montagem de pára raios em SP\" title=\" Montagem de pára raios em SP\"/><p><b>Cortezip</b> / Barueri - SP</p><h2> Montagem de pára raios em SP</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Montagem de pára raios em SP\">COTAR AGORA</a></li>";
    shuffle(
        $random); for($i = 0; $i < $limit; $i++) { print 
        $random[$i]; } ?>
</ul>