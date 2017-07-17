$(window).load(function() {
    $('.loading').delay(1500).fadeOut(1000);
});
function mouseoverfinction(){
    $('#mountainhover').css('animation','showlinemou 0s forwards')
    $('#ringhover').css('animation','showringmou 0s forwards')
    $('#orahover').css('animation','showora 0s forwards')
    $('#title').css('animation','hidetitle 0s forwards')
}

function mouseleavefinction() {
    $('#mountainhover').css('animation','hidelinemou 0s forwards')
    $('#ringhover').css('animation','hideringmou 0s forwards')
    $('#orahover').css('animation','hideora 0s forwards')
    $('#title').css('animation','showtitle 0s forwards')
}

function showregister(){
    $('.registerblock').css('animation','regisblock 0s forwards')
    $('.backregisterblock').css('animation','backregisblock 0s forwards')
}

function hideregister() {
    $('.registerblock').css('animation','hideregisblock 0s forwards')
    $('.backregisterblock').css('animation','hidebackregisblock 0s forwards')
}


