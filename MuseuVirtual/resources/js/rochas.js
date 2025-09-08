document.addEventListener('DOMContentLoaded', function () {
    const swiperOptions = {
        loop: true,
        slidesPerView: 1, // Ajuste para 1 slide em mobile
        spaceBetween: 20,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1280: { slidesPerView: 4 },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    };

    new Swiper(".SwiperIgneas", swiperOptions);
    new Swiper(".SwiperMetamorficas", swiperOptions);
    new Swiper(".SwiperSedimentares", swiperOptions);
});
