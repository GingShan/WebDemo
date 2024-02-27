new WOW().init();

// data-wow-duration="2s" data-wow-delay="5s"
// data-wow-offset="10"  data-wow-iteration="10"

$(".ContenArea .item h3").addClass("wow fadeInUpBig");

$(".ContenArea .item h3").attr("data-wow-offset", "10");




$('.imgSlick').slick({
    infinite: true,

});

$('.CaseSlick').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]

});