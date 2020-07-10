<script >
$(document).ready(function() {
$(".lightbox").fancybox({
wrapCSS    : 'fancybox-custom',
closeClick : true,
helpers : {
title : {
type : 'inside'
},
overlay: {
css: { 'background': 'rgba(0, 0, 0, 0.5)' }
}
},
beforeShow : function(){
palavra = this.title;
this.title = "Imagem ilustrativa de " + this.title;

document.getElementById("fancyalter").alt = palavra;
document.getElementById("fancyalter").title = palavra;
}
});
});
</script>
<script defer src="<?=$url?>js/jquery.fancybox.js" ></script>