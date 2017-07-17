$(window).load(function() {
    $('.loading').delay(1000).fadeOut(1000);
    setTimeout( function () {
        $('#lleft').css('animation', 'mymovelleft 3s forwards')
        $('#lright').css('animation', 'mymovelright 3s forwards')
        $('#galarrowleft').css('animation', 'mymovearight 3s forwards')
        $('#galarrowright').css('animation', 'mymovealeft 3s forwards')
    }, 1800)
    setTimeout(function (){
        $('#galframe').css('animation', 'fadegal 2s forwards')
    }, 3800)

});
