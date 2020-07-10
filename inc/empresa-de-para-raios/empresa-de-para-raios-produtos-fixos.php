<?php define ('ROOT', realpath(dirname(__FILE__)).'/')
; $limit = 3; 
include('inc/vetKey.php'); 
include('inc/rotas.php'); 
include('inc/vetTxt.php')
; include('inc/classes/strFuncoes.class.php')
; $str = new strFuncoes()
; $vetPalavra = $str->RetiraPreposicao($h1)
; $vetKey_PR = $str->buscaVetorAprox($vetPalavra, $vetKey, $limit, $h1)
; foreach ($vetKey_PR as $keyVet => $valSearch)   { $id = $vetKey[$valSearch['id']]["id"]
    ; $key = $vetKey[$valSearch['id']]["key"]
    ; $urlImagem = $vetKey[$valSearch['id']]["urlImagem"]
    ; $dirUrlCliente = $vetKey[$valSearch['id']]["dirUrlCliente"]
    ; $urlSegmento = $vetKey[$valSearch['id']]["urlSegmento"]
    ; $urlEmpresa = $vetKey[$valSearch['id']]["urlEmpresa"]
    ; $urlCategoriaKey = $vetKey[$valSearch['id']]["urlCategoriaKey"]
    ; $urlKey = $vetKey[$valSearch['id']]["urlKey"]
    ; $urlKeySearch = str_replace("-", "+", $vetKey[$valSearch['id']]["urlKey"])
    ; $nomeEmpresa = $vetKey[$valSearch['id']]["nomeEmpresa"]
    ; $cidade = $vetKey[$valSearch['id']]["cidade"]
    ; $uf = $vetKey[$valSearch['id']]["uf"]
    ; $textKey = $vetTxt[$valSearch['id']]['text']
    ; echo "<div class=\"box-produto\"> <div class=\"grid\"> <div class=\"col-3\"> <img src=\"".$url."imagens/thumbs/".$urlImagem."\" title=\"".$key."\" alt=\"".$key."\"> </div> <div class=\"col-9\"> <h2>".$key." </h2> <h3> <b>".$nomeEmpresa." </b> / ".$cidade." - ".$uf." </h3> <p>".$textKey." </p> <a class=\"botao-cotar\" rel=\"nofollow\" href=\"#\" title=\"".$key." \">COTAR AGORA </a> </div> </div> </div>"
    ;  } ?>