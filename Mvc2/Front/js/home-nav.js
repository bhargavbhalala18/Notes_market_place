/* Show & Hide White Navigation */
$(function (){    

    // show/hide nav on page load
    showHideNav();
    
    $(window).scroll(function(){
        
        // // show/hide nav on window's scroll
        showHideNav();
    })
    
    function showHideNav(){
        
        if( $(window).scrollTop() < 50 ){
            
            // Show White nav
            $('nav').addClass("none-nav-top");
            
            // Show white nav logo
            $(".navbar-brand img").attr("src", "images/top-logo.png");
            
            // Show Back To Top Button
            $("#back-to-top").fadeIn();
            
        } else {
            
            // Hide White nav
            $('nav').removeClass("none-nav-top");
            
            // Show dark nav logo
            $(".navbar-brand img").attr("src", "images/logo.png");
            
            // Hide back to top button
            $("#back-to-top").fadeOut();
        }
  
    }
});