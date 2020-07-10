<?
$h1         = 'Mapa do site';
$title      = 'Mapa do site';
$desc       = 'O mapa do site com todos os atalhos para todas as páginas deste site. Qualquer dúvida estamos a disposição por email ou telefone. Clicando aqui';
$key        = 'atalho para as páginas do site, mapa do site';
$var        = 'Mapa do site';

include('inc/head.php');
?>
</head>
<body>

<? include('inc/topo.php');?>
<div class="wrapper">
    
    <main>
    <div class="content">
        <section>
            <?=$caminho?>
            <h1><?=$h1?></h1>
            <ul class="sitemap">
                <? include('inc/mapa-menu-top.php');?>
            </ul>
            
            <br class="clear">
            
        </section>
    </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
</body>
</html>