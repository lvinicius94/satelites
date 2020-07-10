

<app-cotacao-solucs
appConfig='{"btnOrcamento": "#btnOrcamento", "titulo": "h1", "industria": "solucoes-industriais"}'
></app-cotacao-solucs>
<link rel="stylesheet" href="https://sdk.solucoesindustriais.com.br/dist/sdk-cotacao-solucs/styles.css">
<script src="https://sdk.solucoesindustriais.com.br/dist/sdk-cotacao-solucs/package-es5.js?v=<?= date_timestamp_get(date_create()); ?>" nomodule defer></script>
<script src="https://sdk.solucoesindustriais.com.br/dist/sdk-cotacao-solucs/package-es2015.js?v=<?= date_timestamp_get(date_create()); ?>" type="module"></script>

<div class="orcamento-mpi">
   <div style="display:flex;flex-wrap:wrap;flex-direction:column;">
       <!-- <script src="https://www.solucoesindustriais.com.br/assets/js/plugin/orcamentos.min.js"></script>
       <script>
           pluginOrcamentoJs.init({
           industria: 'solucoes-industriais',
           btnOrcamento: '#btnOrcamento',
           titulo: 'h1'
           });
       </script> -->

       <button id="btnOrcamento" class="btn-cotar"><i class="fa fa-envelope"></i>
       Solicite um Orçamento
       </button>
   </div>
</div>