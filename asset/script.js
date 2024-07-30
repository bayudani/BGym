

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
