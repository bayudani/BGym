$(document).ready(function () {
    // fix menu when passed

    // accordion
    $('.ui.accordion')
  .accordion();
  
    $(".masthead").visibility({
        once: false,
        onBottomPassed: function () {
            $(".fixed.menu").transition("fade in");
        },
        onBottomPassedReverse: function () {
            $(".fixed.menu").transition("fade out");
        },
    });

    // create sidebar and attach to menu open
    $(".ui.sidebar").sidebar("attach events", ".toc.item");
});

// swiper

var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});



    // accordion
    $('.ui.accordion')
  .accordion();
