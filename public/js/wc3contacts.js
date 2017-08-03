function showmobilemenu(){
    $('#menu-mobile').css('margin-top', '-34px');
    $('.showcontact').css('z-index','-1');
}

function hidemobilemenu() {
    $('#menu-mobile').css('margin-top', '-463px');
    $('.showcontact').css('z-index','200');
}

function showcontact(){
    $('.contactblock').css('animation','contactblock 0.2s forwards');
    $('.backcontactblock').css('animation','backcontactblock 0.2s forwards');
    setTimeout( function () {
        $('.contactblock').niceScroll().show();
    }, 200);
}

function hidecontact() {
    $('.contactblock').css('animation','hidecontactblock 0.5s forwards');
    $('.backcontactblock').css('animation','hidebackcontactblock 0.5s forwards');
    setTimeout( function () {
        $('.contactblock').niceScroll().hide();
    }, 0);
}

function mouseoverfinction() {
    $('#contact').css('z-index','-1');
    $('#contacthover').css('z-index','27');
}

function mouseleavefinction() {
    $('#contact').css('z-index','26');
    $('#contacthover').css('z-index','-1');
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
