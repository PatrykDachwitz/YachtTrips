import {removeElementById} from "@/utils/removeElement.js";

window.addEventListener('load', function () {
    const searchElement = document.querySelector(`#errorMainMessage`);

    if (searchElement !== undefined) {
        setTimeout(() => {
            removeElementById('errorMainMessage');
        }, 5000);

        searchElement.addEventListener('click', () => {
            removeElementById('errorMainMessage');
        })
    }

});
