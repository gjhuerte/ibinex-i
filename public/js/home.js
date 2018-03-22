$(function(){
    //Carousel
    var myCarousels = $(".carousel");

    //Add indicators
    myCarousels.each(function( index, element  ) {
        var myCarousel = $("#"+$(element).attr('id'));
        myCarousel.append("<ol class='carousel-indicators'></ol>");
        var indicators = $("#"+$(element).attr('id') + " .carousel-indicators");
        $("#"+$(element).attr('id') +" .carousel-inner").children(".item").each(function(index) {
            console.log(index);
            (index === 0) ?
                indicators.append("<li data-target='#"+$(element).attr('id')+"' data-slide-to='"+index+"' class='active'></li>") :
                indicators.append("<li data-target='#"+$(element).attr('id')+"' data-slide-to='"+index+"'></li>");
        });
    });
    myCarousels.carousel({
        interval: 2000
    })

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


    //margin-right fix for fifth-fold
    let marginRight = parseInt($('#third-fold > .row').css('margin-right'));
    $('#fifth-fold > .row').css('margin-right', marginRight).css('margin-left', marginRight);



// scrollreveal is disabled on width=1023px below
//     if (document.documentElement.clientWidth > 1023) {
//         window.sr = ScrollReveal({reset: false, delay: 100, duration: 1200,scale: 0.7, distance: '2em', origin: 'bottom'});
//
//         sr.reveal('#second-fold aside img', {
//             origin: 'fadeIn',
//
//         });
//         sr.reveal('#third-fold aside img', {
//             origin: 'left',
//             delay: 300
//         });
//         sr.reveal('#sixth-fold div.brochures', {
//             duration: 1500
//         }, 250);
//         sr.reveal('#fourth-fold aside .embed-image', {
//             duration: 500
//         });
//         sr.reveal('#fourth-fold aside .embed-blue-wrap *', {
//             duration: 700
//         }, 200);
//         sr.reveal('#second-fold > section div.order-xl-1 *', {
//             duration: 300
//         }, 200);
//         sr.reveal('#third-fold > section div.order-xl-12 *', {
//             duration: 300
//         }, 200);
//         sr.reveal('#fourth-fold > section div.order-xl-1 *', {
//             duration: 300
//         }, 200);
//         sr.reveal('#fifth-fold > section div.order-xl-2 *', {
//             duration: 300
//         }, 200);
//         sr.reveal('#fifth-fold aside .embed-image', {
//             duration: 300
//         });
//         sr.reveal('#fifth-fold aside .embed-image .faButton', {
//             duration: 700,
//             afterReveal: function (){
//
//                 let playButton = $('.playButton');
//                 let playSize =  parseInt(playButton.height()) / 2;
//                 if($( document ).width() > 1201)
//                     playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', (0 - playSize));
//                 else
//                     playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', parseInt($('div.embed-image.halfed').width()) / 2 - playSize);
//                 playButton.css('opacity', 1)
//             }
//         }, 200);
//     }

});