$(window).load(function() {
    $('.loading').delay(1500).fadeOut(1000);
});
function mouseoverfinction(){
    $('#hlinemountain').css('animation','showlinemou 0s forwards')
}

function mouseleavefinction() {
    $('#hlinemountain').css('animation','hidelinemou 0s forwards')
}

function showregister(){
    $('.registerblock').css('animation','regisblock 0s forwards')
    $('.backregisterblock').css('animation','backregisblock 0s forwards')
}

function hideregister() {
    $('.registerblock').css('animation','hideregisblock 0s forwards')
    $('.backregisterblock').css('animation','hidebackregisblock 0s forwards')
}

