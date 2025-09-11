import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', function () {
    const baseOptions = {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    };

    // Rochas Ígneas
    new Swiper(".SwiperIgneas", {
        ...baseOptions,
        navigation: {
            nextEl: ".swiper-next-ignea",
            prevEl: ".swiper-prev-ignea",
        },
    });

    // Rochas Metamórficas
    new Swiper(".SwiperMetamorficas", {
        ...baseOptions,
        navigation: {
            nextEl: ".swiper-next-metamorf",
            prevEl: ".swiper-prev-metamorf",
        },
    });

    // Rochas Sedimentares
    new Swiper(".SwiperSedimentares", {
        ...baseOptions,
        navigation: {
            nextEl: ".swiper-next-sedim",
            prevEl: ".swiper-prev-sedim",
        },
    });
});
