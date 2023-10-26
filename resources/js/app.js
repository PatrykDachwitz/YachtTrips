import './bootstrap';

function offSliders(categorySliders) {
    const banner = document.querySelector(`div.selected[data-category-banner='${categorySliders}']`);
    banner.classList.remove('selected');
    banner.classList.add('d-none');

    return banner.dataset.id;
}
function getLastFirstNumber(categorySliders) {
    const banners = document.querySelectorAll(`div[data-category-banner='${categorySliders}']`);

    const firstId = banners[0].dataset.id;
    const lastId = banners[banners.length - 1].dataset.id;

    return { firstId, lastId }
}

function selectSlider(categorySliders, id) {
    const banner = document.querySelector(`div[data-category-banner='${categorySliders}'][data-id='${id}']`);
    banner.classList.add('selected');
    banner.classList.remove('d-none');
}

function nextSlider(categorySliders) {
    const { firstId, lastId } = getLastFirstNumber(categorySliders);
    let nextId = null;

    const id = offSliders(categorySliders);
    console.log("next: " + id)
    if (id == lastId) {
        nextId = firstId;
    } else {
        nextId = parseInt(id) + 1;
    }
    console.log("next: " + nextId)
    selectSlider(categorySliders, nextId);
}

function backSlider(categorySliders) {
    const { firstId, lastId } = getLastFirstNumber(categorySliders);
    let backId = null;

    const id = offSliders(categorySliders);
    console.log("back: " + id);
    if (id == firstId) {
        backId = lastId;
    } else {
        backId = id - 1;
    }
    console.log("back: " + backId);
    selectSlider(categorySliders, backId);
}


function viewFunction() {
    const backButtons = document.querySelectorAll('button[data-button="back"]');
    const nextButtons = document.querySelectorAll('button[data-button="next"]');

    backButtons.forEach(backButton => {
        backButton.addEventListener('click', () => (backSlider(backButton.dataset.categoryBanner)));
    });
    nextButtons.forEach(nextButton => {
        nextButton.addEventListener('click', () => (nextSlider(nextButton.dataset.categoryBanner)));
    });
}

viewFunction();
