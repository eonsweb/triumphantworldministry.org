import "./bootstrap";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/autoplay";
import "@fortawesome/fontawesome-free/css/all.min.css";
import "aos/dist/aos.css";

import AOS from "aos";
AOS.init({
    duration: 1000,
});

import Alpine from "alpinejs";
import "./alpine";

window.Alpine = Alpine;

Alpine.start();
