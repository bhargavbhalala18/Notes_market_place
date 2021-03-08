/* ========================================
    |  |  |  |  | Eye
   ========================================*/
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

/* ================================
    |  |  |  | Mobile Menu 
   ================================*/
// Smooth Scrolling
$(function(){
    $("a.smooth-scroll").click(function(event){ 
        
        event.preventDefault();
        //get section id.. 
        var section_id = $(this).attr("href");
        
        $("html, body").animate({
            scrollTop: $(section_id).offset().top - 64
        }, 1250, "easeInOutExpo");
     }); 
});

//mobile-menu
$(function(){
    
    // Show mobile nav
    $("#mobile-nav-open-btn").click(function(){
        $("#mobile-nav").css("height", "100%");
    })
    
    // Hide mobile nav
    $("#mobile-nav-close-btn, #mobile-nav a").click(function(){
        $("#mobile-nav").css("height", "0%");

    })
});

/* Animation */
$(function(){
    new WOW().init();
});

/* ================================
    |  |  |  | FAQ
   ================================*/
$(document).ready(function () {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function () {
        $(this).parentsUntil(".card").css({
            "border": "1px solid #d1d1d1"
        });
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function () {
        $(this).prev(".card-header").find("h6").css({
            "font-weight": "700"
        });
        $(this).prev(".card-header").css({
            "background": "white"
        });
        $(this).parent(".card").css("border", "1px solid #d1d1d1");

    }).on('hide.bs.collapse', function () {
        $(this).prev(".card-header").find("h6").css({
            "font-weight": "500"
        });
        $(this).prev(".card-header").css({
            "background": "#f3f3f3"
        });
        $(this).parent(".card").css("border", "1px solid #d1d1d1");

    });
});
