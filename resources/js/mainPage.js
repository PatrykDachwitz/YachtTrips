import {miniSliders} from "@/primary_function/miniSliders.js";
import {sliders} from "@/primary_function/sliders.js";


const yachts = new sliders('yachts')
const oceans = new miniSliders('oceans');



window.addEventListener('scroll', function() {
const menu = document.querySelector('nav.menu');
    if (window.scrollY > 30) {
        menu.classList.add('bg-dark');
    } else if (window.scrollY < 30) {
        menu.classList.remove('bg-dark');
    }
});
