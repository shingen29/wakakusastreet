$(function() {
    var $header = $('#top-head');
    // Nav Fixed
    $(window).scroll(function() {
        if ($(window).scrollTop() > 350) {
            $header.addClass('fixed');
        } else {
            $header.removeClass('fixed');
        }
    });
    // Nav Toggle Button
    $('#nav-toggle').click(function(){
        $header.toggleClass('open');
    });
});

$(function() {
    $('.center-item').slick({
          infinite: true,
          dots:true,
          slidesToShow: 1,
          centerMode: true, //要素を中央寄せ
          centerPadding:'100px', //両サイドの見えている部分のサイズ
          autoplay:true, //自動再生
          responsive: [{
               breakpoint: 480,
                    settings: {
                         centerMode: false,
               }
          }]
     });
});
