

export function activeMenu() {
    const buttonActiveMenu = document.querySelector('div.menu-button-active');

    buttonActiveMenu.addEventListener('click', () => {
        changeVisibilityMenu();
    });

}

function addCorrectColorBackGround() {
    const menu = document.querySelector('nav.menu');

    if (!menu.classList.contains('bg-dark')) {
        menu.classList.add('bg-dark');
    }
}
function removeCorrectColorBackGround() {
    const menu = document.querySelector('nav.menu');

    if (menu.classList.contains('bg-gray') && menu.classList.contains('bg-dark') && window.scrollY < 30) {
        menu.classList.remove('bg-dark');
    }
}

function addActiveMenuMobile() {
    const menu = document.querySelector('nav.menu');

    menu.classList.add('menu-mobile-active');
}
function unsetActiveMenuMobile() {
    const menu = document.querySelector('nav.menu');

    menu.classList.remove('menu-mobile-active');
}

function deactivatedImagesButton() {
    const images = document.querySelectorAll('img.menu-button');

    images.forEach(imageButton => {
        if(imageButton.classList.contains('d-flex')) {
            imageButton.classList.remove('d-flex');
            imageButton.classList.add('d-none');
        }
    })
}
function changeActiveImage(classImage) {
    deactivatedImagesButton();
    const imageButton = document.querySelector(`img.${classImage}`);

    imageButton.classList.remove('d-none');
    imageButton.classList.add('d-flex')
}
function changeVisibilityMenu() {
    const menuContent = document.querySelector('div.menu-content');

    if (menuContent.classList.contains('d-none')) {
        addActiveMenuMobile();
        addCorrectColorBackGround();
        changeActiveImage('menu-image-close');
        menuContent.classList.add('d-flex');
        menuContent.classList.remove('d-none');
    } else {
        unsetActiveMenuMobile();
        removeCorrectColorBackGround();
        changeActiveImage('menu-image-active')
        menuContent.classList.add('d-none');
        menuContent.classList.remove('d-flex');
    }
}
