(function($){

    $(window).on("elementor/frontend/init", function(){

        console.log("elementor frontend init fired");

        elementorFrontend.hooks.addAction("frontend/element_ready/theo_team.default", function($scope, $){
            console.log("Element ready: theo_team.default");
            alert('test');
        });
    });

})(jQuery);


/*
$(".team-carousel, .related-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    margin: 30,
    dots: false,
    loop: true,
    nav : true,
    navText : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0:{
            items:1
        },
        576:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        }
    }
});
*/