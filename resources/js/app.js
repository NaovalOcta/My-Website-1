import "./bootstrap";

// 1. Scroll Reveal Animation
const revealElements = document.querySelectorAll(".reveal");

const revealOnScroll = () => {
    const windowHeight = window.innerHeight;
    const elementVisible = 100; // Trigger sedikit lebih cepat

    revealElements.forEach((reveal) => {
        const elementTop = reveal.getBoundingClientRect().top;
        if (elementTop < windowHeight - elementVisible) {
            reveal.classList.add("active");
        }
    });
};

window.addEventListener("scroll", revealOnScroll);
revealOnScroll(); // Panggil saat load

// 2. Typing Effect Logic (FIXED)
const textElement = document.getElementById("typing-text");
if (textElement) {
    const words = [
        "Frontend Developer",
        "Backend Developer",
        "Tech Enthusiast",
    ];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    const typeEffect = () => {
        const currentWord = words[wordIndex];

        // Logika mengetik dan menghapus yang diperbaiki
        if (isDeleting) {
            // Sedang menghapus
            textElement.textContent = currentWord.substring(0, charIndex);
            charIndex--;
        } else {
            // Sedang mengetik
            textElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        // Kecepatan mengetik
        let typeSpeed = isDeleting ? 50 : 100;

        // Jika kata selesai ditulis
        if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            typeSpeed = 2000; // Jeda lama saat kata penuh terbaca
        }
        // Jika kata selesai dihapus
        else if (isDeleting && charIndex < 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length; // Pindah ke kata berikutnya
            charIndex = 0;
            typeSpeed = 500; // Jeda sedikit sebelum mengetik kata baru
        }

        setTimeout(typeEffect, typeSpeed);
    };

    typeEffect();
}
