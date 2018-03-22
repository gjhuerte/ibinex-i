
$(document).ready(function(){

    function resetCarouselControlPosition(){
        var height = $(".active:first-child").height();
        height /= 4;

        $(".carousel-control-prev").css("bottom", height);
        $(".carousel-control-next").css("bottom", height);
    }
    resetCarouselControlPosition();

    $(window).resize(resetCarouselControlPosition);
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior

            if (location.pathname != this.pathname) {
                return;
            }
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });


    //Carousel Touch
    $('.carousel').each(function () {
        var $carousel = $(this);
        var hammertime = new Hammer(this, {
            recognizers: [
                [Hammer.Swipe, { direction: Hammer.DIRECTION_HORIZONTAL }]
            ]
        });
        hammertime.on('swipeleft', function () {
            $carousel.carousel('next');
        });
        hammertime.on('swiperight', function () {
            $carousel.carousel('prev');
        });
    });
});