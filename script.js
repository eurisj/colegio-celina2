// Mostrar/ocultar botón al hacer scroll
const btnSubir = document.getElementById("btnSubir");

window.onscroll = function () {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        btnSubir.style.display = "block";
    } else {
        btnSubir.style.display = "none";
    }

    // Animación por scroll
    const secciones = document.querySelectorAll("section");
    secciones.forEach(sec => {
        const rect = sec.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            sec.classList.add("visible");
        }
    });
};

// Al hacer clic, sube arriba
btnSubir.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

const slides = document.querySelectorAll(".slide");
let currentSlide = 0;

document.querySelector(".next").addEventListener("click", () => {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
});

document.querySelector(".prev").addEventListener("click", () => {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
});

window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');

    sections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
            section.classList.add('visible');
        } else {
            section.classList.remove('visible');
        }
    });
});
