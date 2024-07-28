$(document).ready(function () {
    // fix menu when passed

    // accordion
    $(".ui.accordion").accordion();

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
    
    // modal
    
    
  
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

function fnView() {
    const passwordField = document.getElementById("pass");
    const eyeIcon = document.getElementById("btnView");
  
    if (passwordField.value.length > 0 && passwordField.type === "password") {
      passwordField.type = "text";
      eyeIcon.innerHTML = '<i class="fa-regular fa-eye"></i>';
      eyeIcon.title = 'sembunyikan password';
    } else {
      passwordField.type = "password";
      eyeIcon.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
      eyeIcon.title = 'lihat password';
    }
  }
