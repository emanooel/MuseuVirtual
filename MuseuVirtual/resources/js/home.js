window.addEventListener('load', function () {
    setTimeout(() => { document.getElementById('loading').classList.add('fade-out'); }, 300);
});

if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 1000, once: true, offset: 100 });
}

const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    autoplay: { delay: 4000, disableOnInteraction: false },
    effect: "fade",
    fadeEffect: { crossFade: true },
    speed: 1000,
});

let ticking = false;
window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            document.querySelectorAll('.floating-element').forEach(el => {
                el.style.transform = `translateY(${-scrolled * 0.3}px)`;
            });
            ticking = false;
        });
        ticking = true;
    }
});

document.querySelectorAll('.card-figure').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'all 0.6s ease';

    card.addEventListener('mouseenter', () => card.style.transform = 'translateY(-15px) scale(1.02)');
    card.addEventListener('mouseleave', () => card.style.transform = 'translateY(0) scale(1)');
    card.addEventListener('click', () => {
        card.style.transform = 'translateY(-5px) scale(0.98)';
        setTimeout(() => card.style.transform = 'translateY(-15px) scale(1.02)', 150);
    });
});

window.addEventListener('load', () => {
    const cards = document.querySelectorAll('.card-figure');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 1200 + (index * 200));
    });
});
