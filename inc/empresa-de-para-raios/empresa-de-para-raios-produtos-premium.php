<ul class="thumbnails">
    <? 
    $random = array(); $limit = 4;
    $random[0] = "<li><img src=\"imagens/thumbs/manutencao-para-raios-sp_11029_58720_1537388302537_cover.jpg\" alt=\" Manutenção para raios SP\" title=\" Manutenção para raios SP\"/><p><b>REMA</b> / São Paulo - SP</p><h2> Manutenção para raios SP</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Manutenção para raios SP\">COTAR AGORA</a></li>";

    $random[1] = "<li><img src=\"imagens/thumbs/-empresa-de-instalacao-de-para-raio_11131_64238_1545071168959_cover.jpg\" alt=\" Empresa de Instalação de Para Raio\" title=\" Empresa de Instalação de Para Raio\"/><p><b>GRAVURAS INDUSTRIAIS DAGER</b> / São Paulo - SP</p><h2> Empresa de Instalação de Para Raio</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\" Empresa de Instalação de Para Raio\">COTAR AGORA</a></li>";

    $random[2] = "<li><img src=\"imagens/thumbs/empresa-de-instalacao-de-spda_11131_64241_1545071306831_cover.jpg\" alt=\"Empresa de Instalação de SPDA\" title=\"Empresa de Instalação de SPDA\"/><p><b>TNJA – Montagens Elétricas</b> / Jundiaí - SP</p><h2>Empresa de Instalação de SPDA</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\"Empresa de Instalação de SPDA\">COTAR AGORA</a></li>";

    $random[3] = "<li><img src=\"imagens/thumbs/montagem-de-para-raios_11131_64462_1545155343569_cover.jpg\" alt=\"Montagem de Pára Raios\" title=\"Montagem de Pára Raios\"/><p><b>Cortezip</b> / Barueri - SP</p><h2>Montagem de Pára Raios</h2><a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\"Montagem de Pára Raios\">COTAR AGORA</a></li>";
    shuffle(
        $random); for($i = 0; $i < $limit; $i++) { print 
        $random[$i]; } ?>
</ul>