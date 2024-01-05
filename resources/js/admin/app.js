import '../bootstrap';
import {provide, ref} from "vue";
import {getLangContent} from "@/primary_function/language.js";
import {activeMenu} from "@/primary_function/menuActive.js";


window.addEventListener('load', () => {
   activeMenu();
});

