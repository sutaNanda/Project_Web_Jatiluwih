// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-green-800', 'backdrop-blur-xs');
        navbar.classList.add('bg-opacity-50'); 
        navbar.classList.add('border-b-1', 'border-gray-600');
        navbar.classList.remove('bg-transparent');
    } else if (window.scrollY === 0) {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('backdrop-blur-xs');
        navbar.classList.remove('bg-opacity-30');
        navbar.classList.remove('border-1');
    } else {
        navbar.classList.add('border-0');
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('backdrop-blur-xs', 'bg-opacity-50', 'border-b-1');
    }
});

// Swiper init
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 28,
    centeredSlides: false,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: false,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 28,
            centeredSlides: false,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 32,
        },
    },
});
