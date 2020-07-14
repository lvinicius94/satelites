<ul class="thumbnails">
    <? 
    $random = array(); $limit = 4;
    $random[0] = "<li><img src=\"imagens/thumbs/empresa-de-spda_10992_56139_1534255578001_cover.jpg\" alt=\" Empresa de SPDA\" title=\" Empresa de SPDA\"/><p><b>REMA</b> / São Paulo - SP</p><h2> Empresa de SPDA</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Empresa de SPDA\">COTAR AGORA</a></li>";

    $random[1] = "<li><img src=\"imagens/thumbs/laudo-de-para-raio_11472_218936_1566408477476_cover.jpg\" alt=\" Laudo SPDA\" title=\" Laudo SPDA\"/><p><b>GRAVURAS INDUSTRIAIS DAGER</b> / São Paulo - SP</p><h2> Laudo SPDA</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Laudo SPDA\">COTAR AGORA</a></li>";

    $random[2] = "<li><img src=\"imagens/thumbs/manutencao-spda_11472_218955_1566413907226_cover.jpg\" alt=\"Manutenção SPDA\" title=\"Manutenção SPDA\"/><p><b>TNJA – Montagens Elétricas</b> / Jundiaí - SP</p><h2>Manutenção SPDA</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\"Manutenção SPDA\">COTAR AGORA</a></li>";

    $random[3] = "<li><img src=\"imagens/thumbs/montagem-de-para-raios-em-sp_11131_219604_1567543615804_cover.jpg\" alt=\" Montagem de pára raios em SP\" title=\" Montagem de pára raios em SP\"/><p><b>Cortezip</b> / Barueri - SP</p><h2> Montagem de pára raios em SP</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Montagem de pára raios em SP\">COTAR AGORA</a></li>";
    shuffle(
        $random); for($i = 0; $i < $limit; $i++) { print 
        $random[$i]; } ?>
</ul>