import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('load', () => {
    const videoHero = document.querySelector(".bg-imagem video");
    videoHero.src = "video/bgVideo.mp4";
    videoHero.autoplay = true;
    videoHero.loop = true;
    videoHero.muted = true;
})
