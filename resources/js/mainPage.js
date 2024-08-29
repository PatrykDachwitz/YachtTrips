import {sliders} from "@/utils/sliders.js";
import {miniSliders} from "@/utils/miniSliders.js";


const yachts = new sliders('yachts')
const oceans = new miniSliders('oceans');

window.addEventListener('scroll', function() {
const menu = document.querySelector('nav.menu');
    if (window.scrollY > 30) {
        menu.classList.add('bg-dark');
    } else if (window.scrollY < 30) {
        if (!menu.classList.contains('menu-mobile-active')) {
            menu.classList.remove('bg-dark');
        }
    }
});
