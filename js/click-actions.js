$('.botao-cotar2').on('click', function() {
    var categoria = $("#breadcrumb").find('.category:last').text();
    var titulo = $('section').find('h1').text();
    $('html, body').animate({
        scrollTop: $('.aviso:last').offset().top
    }, 1000);
    $('form').find('input[name="produto"]').val($(this).attr('title'));
    $('form').find('input[name="produto"]').attr('readonly', 'readonly');
    return false;
});
$('.botao-cotar-destaque').on('click', function() {
    var titulo = $('section').find('h1').text();
    $('html, body').animate({
        scrollTop: $('.aviso:last').offset().top
    }, 1000);
    $('form').find('input[name="produto"]').val($(this).attr('title'));
    $('form').find('input[name="produto"]').attr('readonly', 'readonly');
    return false;
});
$('.botao').on('click', function() {
    var categoria = $("#breadcrumb").find('.category:last').text();
    var botao = $(this);
    var titulo = botao.attr('title');
    ga('send', 'event', {
        eventCategory: categoria,
        eventAction: 'Botão ' + titulo,
        eventLabel: titulo
    }, {
        useBeacon: true
    });
});
 
$(".scroll-down").click(function() {
    $('html,body').animate({
        scrollTop: $("main").offset().top
    }, 'slow');
});
$(".btn-intro").click(function() {
    $('html,body').animate({
        scrollTop: $(".blue").offset().top
    }, 'slow');
});
$(".btn-4").click(function() {
    $('html,body').animate({
        scrollTop: $(".blue").offset().top
    }, 'slow');
});
$(".botao-cotar2").click(function() {
    $('html,body').animate({
        scrollTop: $(".blue").offset(10).top
    },  'slow' );
});
$("#formb").click(function() {
    $('html,body').animate({
        scrollTop: $(".blue").offset().top
    }, 'slow');
});