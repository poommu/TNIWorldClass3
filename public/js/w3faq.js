
function showmobilemenu(){
    $('#menu-mobile').css('margin-top', '-34px');
    $('.showfqa').css('z-index','-1');

}
function hidemobilemenu() {
    $('#menu-mobile').css('margin-top', '-463px');
    $('.showfqa').css('z-index','200');
}

function showfqa(){
    $('.fqablock').css('animation','fqablock 0.2s forwards');
    $('.backfqablock').css('animation','backfqablock 0.2s forwards');
    setTimeout( function () {
        $('.fqablock').niceScroll().show();
    }, 200);
}

function hidefqa() {
    $('.fqablock').css('animation','hidefqablock 0.5s forwards');
    $('.backfqablock').css('animation','hidebackfqablock 0.5s forwards');
    setTimeout( function () {
        $('.fqablock').niceScroll().hide();
    }, 0);
}

function load(){
    var userAgent = navigator.userAgent.toLowerCase();
    if (userAgent .indexOf('safari')!=-1){
        if(userAgent .indexOf('chrome')  > -1){
        }else{
            var screenWidth  = $(window).width();
            $(window).resize(function(){
                screenWidth  = $(window).width();
            });
            if(screenWidth<=535) {
                $('.menu').css('margin-top','15px');
            }
        }
    }
}