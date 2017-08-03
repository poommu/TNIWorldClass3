function showmobilemenu(){
    $('#menu-mobile').css('margin-top', '-34px');
    $('.showmap').css('z-index','-1');
}

function hidemobilemenu() {
    $('#menu-mobile').css('margin-top', '-463px');
    $('.showmap').css('z-index','200');
}

function showmap(){
    $('.mapblock').css('animation','mapblock 0.2s forwards');
    $('.backmapblock').css('animation','backmapblock 0.2s forwards');
    setTimeout( function () {
        $('.mapblock').niceScroll().show();
    }, 200);
}

function hidemap() {
    $('.mapblock').css('animation','hidemapblock 0.5s forwards');
    $('.backmapblock').css('animation','hidebackmapblock 0.5s forwards');
    setTimeout( function () {
        $('.mapblock').niceScroll().hide();
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
