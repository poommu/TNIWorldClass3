
function showmobilemenu(){
    $('#menu-mobile').css('margin-top', '-34px');
}

function hidemobilemenu() {
    $('#menu-mobile').css('margin-top', '-463px');
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
