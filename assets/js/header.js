$(function(){
    // Close when clicking outside the header box
    $(document).mouseup(function(e) 
    {
        var container   = $(".header-box-container");
        var mobile_menu        = $(".mobile-menu-container");
        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0 && container.hasClass('active')) 
        {
            container.removeClass('active');
        }

        // For mobile menu        
        if (!mobile_menu.is(e.target) && mobile_menu.has(e.target).length === 0 && mobile_menu.hasClass('active')) 
        {
            mobile_menu.removeClass('active');
            $(".page-overlay").removeClass("active");
        }
    });

    $(".toggle-news-widget").click(function(e){
        e.preventDefault();
        $(".header-box-container").addClass("active");
    })


    // Toggle mobile menu
    $(".mobile-menu-toggler").click(function(e){
        e.preventDefault();
        $(".page-overlay").addClass("active");
        $(".mobile-menu-container").addClass("active");
    });

    // Close mobile menu button
    $(".close-mobile-menu").click(function(e){
        e.preventDefault();
        $(".mobile-menu-container").removeClass("active");
        $(".page-overlay").removeClass("active");
    });
})