$(document).ready(function() {
    $(window).scroll(function() {
        var navOffset = $("#inner-nav").offset().top-100;
        if($(document).scrollTop() >= navOffset){
            $("#inner-nav").addClass('shadow');
            $("#inner-nav").removeClass('p-bot-30');
        }
        else {
            $("#inner-nav").removeClass('shadow');
            $("#inner-nav").addClass('p-bot-30');
        }
    });


    // $(document).on("scroll", onScroll);

    // $('a[href^="#"]').on('click', function(event) {
    //     if (this.hash !== "") {
    //         // Prevent default anchor click behavior
    //         event.preventDefault();
    //
    //         $(document).off("scroll");
    //
    //         $('a').each(function () {
    //             $(this).removeClass('active');
    //         });
    //         $(this).addClass('active');
    //
    //         // Store hash
    //         var target = this.hash,
    //             menu = target;
    //
    //         // Using jQuery's animate() method to add smooth page scroll
    //         // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    //         $target = $(target);
    //         $('html, body').stop().animate({
    //             'scrollTop': $target.offset().top
    //         }, 900, 'swing', function () {
    //             window.location.hash = target;
    //             // $(document).on("scroll", onScroll);
    //         });
    //     } // End if
    // });

    // function onScroll(event){
    //     var scrollPos = $(document).scrollTop();
    //     $('.menu2').each(function () {
    //         var currLink = $(this);
    //         console.log(currLink);
    //         var refElement = $(currLink.attr("href"));
    //         console.log(refElement.position().top + ' <= ' + scrollPos + " && " + refElement.position().top + refElement.height() + " > " + scrollPos);
    //         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
    //             $('#menu-center ul li a').removeClass("active");
    //             currLink.addClass("active");
    //         }
    //         else{
    //             currLink.removeClass("active");
    //         }
    //     });
    // }


    // window.sr = ScrollReveal();
    //
    // sr.reveal('.inner-platform', {
    //     duration: 2000,
    //     viewFactor: 0.5,
    //     distance: '100px',
    // }, 450);
    //
    // sr.reveal('#platform-text-container', {
    //     distance: '300px',
    // });
    //
    // sr.reveal('.second-section', {
    //     duration: 2000,
    //     viewFactor: 0.5,
    //     distance: '100px',
    // }, 450);
    //
    // sr.reveal('#second-section-container', {
    //     distance: '300px',
    // });
    //
    // sr.reveal('.third-section', {
    //     duration: 2000,
    //     viewFactor: 0.5,
    //     distance: '100px',
    // }, 450);
    //
    // sr.reveal('.third-section-mobile', {
    //     duration: 2000,
    //     viewFactor: 0.5,
    //     distance: '100px',
    // }, 450);
    //
    // sr.reveal('#third-section-container', {
    //     distance: '300px',
    // });
    //
    // sr.reveal('.fourth-section', {
    //     duration: 2000,
    //     viewFactor: 0.5,
    //     distance: '100px',
    // }, 450);
    //
    // sr.reveal('#fourthSection', {
    //     distance: '300px',
    // });
    //
    // sr.reveal('.fifth-section', {
    //     duration: 2000,
    //     viewFactor: 0.5,
    //     distance: '100px',
    // }, 450);
    //
    // sr.reveal('#fifthSection', {
    //     distance: '300px',
    // });
});

