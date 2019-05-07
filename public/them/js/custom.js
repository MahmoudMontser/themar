$(document).scroll(function(){
    if($(document).scrollTop() >= 100){
        $('.navbar-default').addClass('nav-scroll-fixed');
    }else{

        $('.navbar-default').removeClass('nav-scroll-fixed');


    }

    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }


});


$(document).ready(function() {

    $("#owl-demo").owlCarousel({

        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        items : 1,
        loop :true,
        nav:true,
        singleItem:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
        // "singleItem:true" is a shortcut for:

        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    $("body").niceScroll({
        cursorcolor:"#bb903a",
        cursorwidth:"15px"
    });




$('#second-owl').owlCarousel({
    navigation : true, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    loop:true,
    margin:25,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
});



$(document).ready(function(){
    $(".gear-check").click(function(){
        $(".close-all").fadeIn()
    });

    $(".close-all").click(function(){
        $(".login-box").fadeOut()
    });

    $(".close-all").click(function(){
        $(".close-all").fadeOut()
    });

    $(".language-button i").click(function(){
        $(".close-all").fadeIn()
    });

    $(".close-all").click(function(){
        $(".language-box").fadeOut()
    });
    $(".close").click(function(){
        $(".small-form").fadeOut()
    });
    $("#sear").click(function(){
        $(".small-form").fadeIn()
    });












    $(".language-button i").click(function(){
        $(".lang .language-box").fadeToggle();
    });
    $(".search-icon").click(function(){
        $(".small-form").toggle();
    });
});

$(".gear-check").click(function(){
    $(".login-box").fadeToggle();


});


