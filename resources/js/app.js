import './bootstrap';
import {activeMenu} from "@/primary_function/menuActive.js";



//Function run menu in mobile version
window.addEventListener('load', () => {
    activeMenu();
});

