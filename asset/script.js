// import './swiper';
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

function fnView() {
  const passwordField = document.getElementById("pass");
  const eyeIcon = document.getElementById("btnView");

  if (passwordField.value.length > 0 && passwordField.type === "password") {
      passwordField.type = "text";
      eyeIcon.innerHTML = '<i class="fa-regular fa-eye w-[18px] h-[18px] absolute right-4 cursor-pointer  "></i>';
      eyeIcon.title = 'sembunyikan password';
  } else {
      passwordField.type = "password";
      eyeIcon.innerHTML = '<i class="fa-regular fa-eye-slash w-[18px] h-[18px] absolute right-4 cursor-pointer"></i>';
      eyeIcon.title = 'lihat password';
  }
}

function validateForm() {
  // Mendapatkan nilai dari input
  var username = document.getElementById("username").value.trim();
  var email = document.getElementById("email").value.trim();
  var password = document.getElementById("Password").value.trim();
  var repeatPassword = document.getElementById("konfirmasi_pass").value.trim();

  // Cek apakah ada yang kosong
  if (!email || !username || !password || !repeatPassword) {
    Swal.fire({
      icon: "warning",
      title: "Oops!",
      text: "Semua field harus diisi!",
    });
    return false; // Mencegah pengiriman formulir
  }

  // Cek kesesuaian password
  if (password !== repeatPassword) {
    Swal.fire({
      icon: "warning",
      title: "Oops!",
      text: "Password dan konfirmasi password tidak cocok!",
    });
    return false; // Mencegah pengiriman formulir
  }

  return true; // Lanjutkan pengiriman formulir
}

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("myCartDropdownButton1").click();
});

document.querySelectorAll(".harga").forEach(function (element) {
  let harga = parseInt(
    element.innerText.replace("Rp.", "").replace(/\./g, "").trim()
  );
  if (!isNaN(harga)) {
    let formattedHarga = new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR",
      minimumFractionDigits: 0,
      maximumFractionDigits: 0,
    }).format(harga);
    element.innerText = formattedHarga;
  }
});
