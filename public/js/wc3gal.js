
    setTimeout( function () {
        $('#lleft').css('animation', 'mymovelleft 3s forwards');
        $('#lright').css('animation', 'mymovelright 3s forwards');
        $('#galarrowleft').css('animation', 'mymovealeft 3s forwards');
        $('#galarrowright').css('animation', 'mymovearight 3s forwards');
    }, 800);

    setTimeout(function (){
        $('#galframe').css('animation', 'fadegal 2s forwards');
        $('#imgslide').css('animation', 'fadegal 2s forwards');
        $('#left_holder').css('z-index', '40');
        $('#right_holder').css('z-index', '40');
    }, 2800);

    function showmobilemenu(){
        $('#menu-mobile').css('margin-top', '-34px');
        $('#left_holder').css('z-index', '-1');
        $('#right_holder').css('z-index', '-1');
        $('#left_holder').css('curser', 'none');
        $('#right_holder').css('curser', 'none');
    }
    function hidemobilemenu() {
        $('#menu-mobile').css('margin-top', '-463px');
        $('#left_holder').css('z-index', '40');
        $('#right_holder').css('z-index', '40');
        $('#left_holder').css('curser', 'pointer');
        $('#right_holder').css('curser', 'pointer');
    }

    function showleft() {
        $('.left').css('opacity', '0.8');
    }
    function hideleft() {
        $('.left').css('opacity', '0');
    }
    function showright() {
        $('.right').css('opacity', '0.8');
    }
    function hideright() {
        $('.right').css('opacity', '0');
    }

    var imagecount = 1;
    var total = 15;

    function slide(x) {
        var Image = document.getElementById('img');
        imagecount = imagecount+x;
        if(imagecount>total) {
            imagecount = 1;
        }
        if(imagecount<1) {
            imagecount = total;
        }
        Image.src = "images/Slideimg/img"+imagecount+".jpg";
    }

    setTimeout(function (){
    window.setInterval(function slideN(x) {
        var Image = document.getElementById('img');
        imagecount = imagecount+1;
        if(imagecount>total) {
            imagecount = 1;
        }
        if(imagecount<1) {
            imagecount = total;
        }
        Image.src = "images/Slideimg/img"+imagecount+".jpg";
    },5000);
    },2800);

    function myfunction() {
        load();
        slideN();

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
                    $('#imgslide').css('height','61%');
                    $('#imgslide').css('top','23%');
                    $('#lright').css('height','110%');
                    $('#lright').css('top','-4.5%');
                    $('#lleft').css('height','110%');
                    $('#lleft').css('top','-4.5%');
                }
            }
        }
    }
