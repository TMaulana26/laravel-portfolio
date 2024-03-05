$(window).scroll(function() {
    $('.progress-bar').each(function() {
        var componentOffset = $(this).offset().top;
        var scrollPosition = $(window).scrollTop();
        var windowHeight = $(window).height();
        var currentWidth = $(this).width(); // Get the current width

        // Check if the element has not been animated yet
        if (!$(this).hasClass('animated')) {
            if (scrollPosition >= componentOffset - windowHeight) {
                $(this).css('width', '0'); // Reset the width to 0 before starting the animation
                $(this).animate({
                    width: currentWidth
                }, 200, function() {
                    // Add a class to mark this element as animated
                    $(this).addClass('animated');
                }); // Animate to the current width
            }
        }
    });
});
