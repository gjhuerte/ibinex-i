
$(document).ready(function(){
    $('.board-slick').slick({
        prevArrow: $('#board-prev'),
        nextArrow: $('#board-next'),
        slidesToShow: 1,
        infinite: false
    });

    $('.board-slick').on('afterChange', function(e,s,curr){
        $('#board-next').css('color','white');
        $('#board-prev').css('color','white');

        if($('.slick-members:first-child').hasClass('slick-active')){
            $('#board-prev').css('color','rgba(255,255,255,0.3)');
        }

        if($('.slick-members:last-child').hasClass('slick-active')){
            $('#board-next').css('color','rgba(255,255,255,0.3)');
        }
    });
});