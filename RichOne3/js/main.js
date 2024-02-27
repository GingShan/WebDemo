/* Chinese initialisation for the jQuery UI date picker plugin. */
/* Written by Ressol (ressol@gmail.com). */


$(function() {
    $(window).scroll(function() {
        var scrollVal = $(this).scrollTop();
        $("span.qScrollTop").text(scrollVal);

        if (scrollVal <= 60) {
            /* 如果滾動的物件捲動 > 500 則觸發指定的動作。*/
            $(".navbar").removeClass("Sticky");

        } else {
            $(".navbar").addClass("Sticky");

        }
    });
});


$(function() {
    //啟動ScrollMagic控制器


    $('.ImgSlick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        // autoplay: true,
        // autoplaySpeed: 2000,
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


    $('.CaseSlick').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        dots: true,
        infinite: true,
        speed: 500,
        // fade: true,
        cssEase: 'linear',
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 991,
            settings: {
                centerMode: true,
                centerPadding: '45px',
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: true,




            }
        }]

    });
});