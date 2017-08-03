$(window).load(function() {
    $('.loading').delay(1500).fadeOut(1000);
});
    function mouseoverfinction() {
        $('#mountainhover').css('animation', 'showlinemou 0.01s forwards');
        $('#ringhover').css('animation', 'showringmou 0.01s forwards');
        $('#orahover').css('animation', 'showora 0.01s forwards');
        $('#title').css('animation', 'hidetitle 0.01s forwards');
        $('#ring').css('z-index','-1');
    }

    function mouseleavefinction() {
        $('#mountainhover').css('animation', 'hidelinemou 0.01s forwards');
        $('#ringhover').css('animation', 'hideringmou 0.01s forwards');
        $('#orahover').css('animation', 'hideora 0.01s forwards');
        $('#title').css('animation', 'showtitle 0.01s forwards');
        $('#ring').css('z-index','15');
    }

    function showregister(){
    $('#registerblock').css('animation','regisblock 0.01s forwards');
    $('#headregisterblock').css('animation','regisblock 0.01s forwards');
    $('.regisb').css('animation','regisblock 0.01s forwards');
    $('.textregis').css('animation','showtextregis 0.01s forwards');
    $('.mapbutton').css('animation','showmapbutton 0.01s forwards');
    $('.backregisterblock').css('animation','backregisblock 0.01s forwards');
    $('.regisbutton').css('animation','showregisbutton 0.01s forwards');
        setTimeout( function () {
            $('.textregis').niceScroll().show();
        }, 100);

    }

    function hideregister() {
    $('#registerblock').css('animation','hideregisblock 0.5s forwards');
    $('#headregisterblock').css('animation','hideregisblock 0.5s forwards');
    $('.regisb').css('animation','hideregisblock 0.5s forwards');
    $('.textregis').css('animation','hidetextregis 0.5s forwards');
    $('.mapbutton').css('animation','hidemapbutton 0.5s forwards');
    $('.backregisterblock').css('animation','hidebackregisblock 0.5s forwards');
    $('.regisbutton').css('animation','hideregisbutton 0.5s forwards');
        setTimeout( function () {
            $('.textregis').niceScroll().hide();
        }, 0);
    }

function showmobilemenu(){
    $('#menu-mobile').css('margin-top', '-34px');
    $('.showhovermobile').css('z-index','-1');
}

function hidemobilemenu() {
    $('#menu-mobile').css('margin-top', '-463px');
    $('.showhovermobile').css('z-index','100');
}


function hidereigisb() {
    hideregister();
    $('.registerblock').css('animation','showregisterblock 0.01s forwards');
    $('.backregisallpage').css('animation','showbackallregisterblock 0.01s forwards');
    setTimeout( function () {
        $('.regispage1').niceScroll().show();
    }, 100);
    $('.regispage2').hide();
}

function closeregis() {
    var checkyorn = confirm("น้องต้องการออกจากหน้ากรอกข้อมูลใช่หรือไม่?");
    if(checkyorn == true)
    {
        $('.registerblock').css('animation','hideregisterblock 0.5s forwards');
        $('.backregisallpage').css('animation','hidebackallregisterblock 0.5s forwards');
        setTimeout( function () {
            $('.regispage1').niceScroll().hide();
            $('.regispage2').niceScroll().hide();
        }, 0);
    }
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
            $('.textregis').css('font-size','19.5px');
            $('center').css('-webkit-margin-after','0.1em')
        }
    }
}
}

function hidepage1() {
    $('.regispage1').hide();
    setTimeout( function () {
        $('.regispage1').niceScroll().hide();
    }, 0);
    $('.regispage2').show();
    setTimeout( function () {
        $('.regispage2').niceScroll().show();
    }, 0);
}

function backtopage1() {
    $('.regispage1').show();
    setTimeout( function () {
        $('.regispage1').niceScroll().show();
    }, 0);
    $('.regispage2').hide();
    setTimeout( function () {
        $('.regispage2').niceScroll().hide();
    }, 0);
}
