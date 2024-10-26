let slideIndex = 1;
let startX = 0;
let isSwiping = false;

showSlides(slideIndex);

// Controla o slide atual
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("carousel-image");
    let titles = document.getElementsByClassName("carousel-title");
    
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    
    // Esconde todas as imagens e textos
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
        titles[i].classList.remove("active");
    }
    
    // Mostra a imagem e o texto atual
    slides[slideIndex-1].classList.add("active");
    titles[slideIndex-1].classList.add("active");
}

// Função que esconde o vídeo e mostra o conteúdo principal ao final do vídeo
let video = document.getElementById('intro-video');
video.onended = function() {
    document.getElementById('splash-screen').style.display = 'none';
    document.getElementById('main-content').style.display = 'block';
};

// Detecta o início do toque ou clique (para o swipe)
document.getElementById('carousel-images').addEventListener('touchstart', function(e) {
    startX = e.touches[0].clientX;
    isSwiping = true;
});

document.getElementById('carousel-images').addEventListener('touchmove', function(e) {
    if (!isSwiping) return;
    let deltaX = e.touches[0].clientX - startX;
    if (deltaX > 50) {
        plusSlides(-1);
        isSwiping = false;
    } else if (deltaX < -50) {
        plusSlides(1);
        isSwiping = false;
    }
});

document.getElementById('carousel-images').addEventListener('mousedown', function(e) {
    startX = e.clientX;
    isSwiping = true;
});

document.getElementById('carousel-images').addEventListener('mousemove', function(e) {
    if (!isSwiping) return;
    let deltaX = e.clientX - startX;
    if (deltaX > 50) {
        plusSlides(-1);
        isSwiping = false;
    } else if (deltaX < -50) {
        plusSlides(1);
        isSwiping = false;
    }
});

document.getElementById('carousel-images').addEventListener('mouseup', function() {
    isSwiping = false;
});

document.getElementById('carousel-images').addEventListener('mouseleave', function() {
    isSwiping = false;
});

function plusSlides(n) {
    showSlides(slideIndex += n);
}
