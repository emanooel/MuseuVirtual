// console.log("ola")

// Fullscreen function
window.openFullscreen = function () {
    const img = document.getElementById('main-rocha-image') || document.getElementById('main-mineral-image');
    if (img.requestFullscreen) {
        img.requestFullscreen();
    } else if (img.webkitRequestFullscreen) {
        img.webkitRequestFullscreen();
    } else if (img.msRequestFullscreen) {
        img.msRequestFullscreen();
    }
}

Fancybox.bind("[data-fancybox]", {
    hideScrollbar: false,
    Toolbar: {
        display: {
            left: ["infobar"],
            middle: [],
            right: ["slideshow", "download", "thumbs", "close"],
        },
    },
});

// Loading screen
window.addEventListener('load', function () {
    const loadingOverlay = document.getElementById('loading-overlay');
    setTimeout(() => {
        loadingOverlay.style.opacity = '0';
        setTimeout(() => {
            loadingOverlay.style.display = 'none';
        }, 500);
    }, 800);
});

// Swiper and main functionality
document.addEventListener('DOMContentLoaded', function () {
    // Detecta se é rocha ou mineral
    const mainImage = document.getElementById('main-rocha-image') || document.getElementById('main-mineral-image');
    const isMineral = document.getElementById('main-mineral-image') !== null;
    
    // Define o seletor do swiper baseado no tipo
    const swiperSelector = isMineral ? ".swiper-mineral-thumbs" : ".swiper-rocha-thumbs";
    
    if (document.querySelector(swiperSelector)) {
        const thumbsSwiper = new Swiper(swiperSelector, {
            spaceBetween: 15,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesProgress: true,
            loop: false, // Mudei para false para evitar problemas
            centeredSlides: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: { slidesPerView: 2.5, spaceBetween: 10 },
                480: { slidesPerView: 3, spaceBetween: 12 },
                768: { slidesPerView: 4, spaceBetween: 15 },
                1024: { slidesPerView: 5, spaceBetween: 15 },
            },
        });

        // Handle thumbnail clicks
        thumbsSwiper.on('click', function (swiper, event) {
            const clickedSlide = event.target.closest('.swiper-slide');
            if (clickedSlide && mainImage) {
                const newSrc = clickedSlide.querySelector('img').getAttribute('data-src');
                if (newSrc) {
                    mainImage.style.opacity = '0.5';
                    mainImage.src = newSrc;
                }
            }
    });
    // Handle thumbnail clicks with path tracking
    thumbsSwiper.on('click', function (swiper, event) {
        const clickedSlide = event.target.closest('.swiper-slide');
        if (clickedSlide) {
            const newSrc = clickedSlide.querySelector('img').getAttribute('data-src');
            const newPath = clickedSlide.querySelector('img').getAttribute('data-path');
            
            if (newSrc && newPath) {
                mainImage.style.opacity = '0.5';
                mainImage.src = newSrc;
                
                // Update the data-current-path attribute for the main image
                mainImage.setAttribute('data-current-path', newPath);
                    // Atualiza o link do fancybox também
                    const mainImageLink = document.getElementById('main-image-link');
                    if (mainImageLink) {
                        mainImageLink.href = newSrc;
                    }

                    mainImage.onload = function () {
                        mainImage.style.opacity = '1';
                    };

                    // Remove classe ativa de todos os slides
                    document.querySelectorAll('.swiper-slide').forEach(slide => {
                        slide.classList.remove('swiper-slide-thumb-active');
                    });
                    clickedSlide.classList.add('swiper-slide-thumb-active');
                }
            }
        });
    }

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.section-container').forEach(el => {
        observer.observe(el);
    });
});

// Download image function
window.downloadImage = function() {
    const mainImage = document.getElementById('main-rocha-image') || document.getElementById('main-mineral-image');
    const imageSrc = mainImage.src;
    const a = document.createElement('a');
    a.href = imageSrc;
    
    // Define o nome do arquivo baseado no tipo
    const isMineral = document.getElementById('main-mineral-image') !== null;
    const prefix = isMineral ? 'mineral' : 'rocha';
    
    a.download = `${prefix}-${Date.now()}`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);

    showNotification('📥 Download da imagem iniciado!');
}

// QR Code functions
window.showQRCode = function () {
    const modal = document.getElementById('qrcode-modal-overlay');
    const qrcodeContainer = document.getElementById('qrcode');
    modal.style.display = 'flex';

    qrcodeContainer.innerHTML = '';

    const currentUrl = window.location.href;
    new QRCode(qrcodeContainer, {
        text: currentUrl,
        width: 200,
        height: 200,
        colorDark: "#1c1f1a",
        colorLight: "#F1EEDD",
        correctLevel: QRCode.CorrectLevel.H
    });
}

window.hideQRCode = function () {
    const modal = document.getElementById('qrcode-modal-overlay');
    modal.style.display = 'none';
}

// Download QR Code function
window.downloadQRCode = function () {
    const qrcodeContainer = document.getElementById('qrcode');
    const canvas = qrcodeContainer.querySelector('canvas');

    if (canvas) {
        const imageDataURL = canvas.toDataURL("image/png");
        const a = document.createElement('a');
        a.href = imageDataURL;
        
        // Define o nome do arquivo baseado no tipo
        const isMineral = document.getElementById('main-mineral-image') !== null;
        const prefix = isMineral ? 'mineral' : 'rocha';
        
        a.download = `qrcode-${prefix}-${Date.now()}`;

        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);

        showNotification('✅ QR Code baixado!');
    } else {
        showNotification('Gerando QR Code... por favor, tente novamente.', 'error');
        showQRCode();
    }
}

// Notification system
window.showNotification = function (message) {
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--accent-green);
        color: var(--primary-dark);
        padding: 15px 25px;
        border-radius: 10px;
        font-weight: 600;
        z-index: 10000;
        animation: slideInRight 0.3s ease;
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease forwards';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Close modal when clicking outside
document.addEventListener('DOMContentLoaded', function() {
    const qrModal = document.getElementById('qrcode-modal-overlay');
    if (qrModal) {
        qrModal.addEventListener('click', function (e) {
            if (e.target === this) {
                hideQRCode();
            }
        });
    }
});

// Keyboard navigation
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        hideQRCode();
        hideAnnotationsModal();
    }
});

// --- Updated Functions for Dynamic Annotations ---
const annotationsModal = document.getElementById('annotations-modal-overlay');
const modalImage = document.getElementById('modal-annotation-image');
const annotationsContainer = document.getElementById('annotations-container');
let currentAnnotations = [];
let imageNaturalWidth = 0;
let imageNaturalHeight = 0;

// New function to get current image annotations
window.showCurrentImageAnnotations = function () {
    const mainImage = document.getElementById('main-rocha-image');
    const currentPath = mainImage.getAttribute('data-current-path');
    
    // Get annotations for the current image path
    const currentImageAnnotations = window.fotosComAnotacoes[currentPath] || [];
    
    if (currentImageAnnotations.length === 0) {
        showNotification('Esta imagem não possui anotações.');
        return;
    }
    
    showAnnotationsModal(currentImageAnnotations);
}

// Updated showAnnotationsModal function
window.showAnnotationsModal = function (anotacoesData) {
    const mainImage = document.getElementById('main-rocha-image');
    modalImage.src = mainImage.src;

    hideQRCode();

    annotationsContainer.innerHTML = '';
    currentAnnotations = anotacoesData || [];

    annotationsModal.style.display = 'flex';

    modalImage.onload = function() {
        imageNaturalWidth = modalImage.naturalWidth;
        imageNaturalHeight = modalImage.naturalHeight;
        renderAnnotations();
    };

    window.addEventListener('resize', renderAnnotations);
}

window.hideAnnotationsModal = function () {
    annotationsModal.style.display = 'none';
    window.removeEventListener('resize', renderAnnotations);
}

function renderAnnotations() {
    if (!modalImage.complete || modalImage.naturalWidth === 0) return;

    const displayedWidth = modalImage.clientWidth;
    const displayedHeight = modalImage.clientHeight;

    const scaleX = displayedWidth / imageNaturalWidth;
    const scaleY = displayedHeight / imageNaturalHeight;

    annotationsContainer.innerHTML = '';

    currentAnnotations.forEach(anotacao => {
        const x = anotacao.x * scaleX;
        const y = anotacao.y * scaleY;

        const pin = document.createElement('div');
        pin.className = 'annotation-pin';
        pin.style.left = `${x}px`;
        pin.style.top = `${y}px`;

        const tooltip = document.createElement('div');
        tooltip.className = 'annotation-tooltip';
        tooltip.innerHTML = `<p>${anotacao.texto}</p>`;
        
        const containerBounds = annotationsContainer.getBoundingClientRect();
        if (x + 8 + 200 > containerBounds.width) {
            tooltip.style.right = '8px';
        } else {
            tooltip.style.left = '8px';
        }

        pin.appendChild(tooltip);
        annotationsContainer.appendChild(pin);
    });
}

annotationsModal.addEventListener('click', function(e) {
    if (e.target === this) {
        hideAnnotationsModal();
    }
});

// Função adicional para trocar imagem (compatibilidade)
window.changeMainImage = function(imageSrc) {
    const mainImage = document.getElementById('main-rocha-image') || document.getElementById('main-mineral-image');
    const mainImageLink = document.getElementById('main-image-link');
    
    if (mainImage) {
        mainImage.style.opacity = '0.5';
        mainImage.src = imageSrc;
        
        if (mainImageLink) {
            mainImageLink.href = imageSrc;
        }
        
        mainImage.onload = function () {
            mainImage.style.opacity = '1';
        };
    }
}