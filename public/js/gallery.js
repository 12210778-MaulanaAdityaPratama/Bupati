let nextBtn = document.querySelector("#next");
let prevBtn = document.querySelector("#prev");
let slides = document.querySelectorAll(".slide");
let changeSlide = 0;

nextBtn.addEventListener("click", function() {
    slides[changeSlide].classList.remove("show"); // Hapus class show dari slide yang aktif
    changeSlide = (changeSlide + 1) % slides
        .length; // Hitung slide berikutnya, jika sudah di akhir akan kembali ke awal
    slides[changeSlide].classList.add("show"); // Tampilkan slide berikutnya
});

prevBtn.addEventListener('click', function() {
    slides[changeSlide].classList.remove("show"); // Hapus class show dari slide yang aktif
    changeSlide = (changeSlide - 1 + slides.length) % slides
        .length; // Hitung slide sebelumnya, jika sudah di awal akan kembali ke akhir
    slides[changeSlide].classList.add("show"); // Tampilkan slide sebelumnya
});