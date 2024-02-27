$(function() {
    $(window).scroll(function() {
        var scrollVal = $(this).scrollTop();

        if (scrollVal >= 100) {
            /* 如果滾動的物件捲動 > 500 則觸發指定的動作。*/
            $(".linkArea").addClass("Color");
            $(".logo img").attr("src","./images/logo-blue-01.svg");

        } else {
            $(".linkArea").removeClass("Color");
            $(".logo img").attr("src","./images/logo-09.svg");
        }
    });
});

$(function(){
    $(".A").click(()=>{
        $(".linkArea").toggleClass("move");
        $(".A").toggleClass("apear");
        $(".B").toggleClass("apear");
    });
    $(".B").click(()=>{
        $(".linkArea").toggleClass("move");
        $(".B").toggleClass("apear");
        $(".A").toggleClass("apear");
    });
    $(".nav-link").click(()=>{
        $(".linkArea").toggleClass("move");
        $(".B").toggleClass("apear");
        $(".A").toggleClass("apear");
    })
});


$('.ImgSlick').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                // centerMode: true,
                // centerPadding: ' 10px',
            }
        }


    ]

});