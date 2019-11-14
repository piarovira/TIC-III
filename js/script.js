$(document).ready(function () {

    $('.first-button').on('click', function () {
        $('.animated-icon1').toggleClass('open');
    });

    $("#card1").click(function () {
        $(".rotate1").toggleClass("down");
    })
    $("#card2").click(function () {
        $(".rotate2").toggleClass("down");
    })
    $("#card3").click(function () {
        $(".rotate3").toggleClass("down");
    })
    $("#card4").click(function () {
        $(".rotate4").toggleClass("down");
    })
    $("#card5").click(function () {
        $(".rotate5").toggleClass("down");
    })
    $("#card6").click(function () {
        $(".rotate6").toggleClass("down");
    })
    $("#card7").click(function () {
        $(".rotate7").toggleClass("down");
    })
    $("#card8").click(function () {
        $(".rotate8").toggleClass("down");
    })
    $("#card9").click(function () {
        $(".rotate9").toggleClass("down");
    })
    $("#card10").click(function () {
        $(".rotate10").toggleClass("down");
    })
    $("#card11").click(function () {
        $(".rotate11").toggleClass("down");
    })
    $("#card12").click(function () {
        $(".rotate12").toggleClass("down");
    })

    $('#example').DataTable();

    $('#blogCarousel').carousel({
        interval: 1000
    });


});


$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});