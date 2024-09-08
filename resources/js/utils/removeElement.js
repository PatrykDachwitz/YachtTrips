export function removeElementById(id) {
    const searchElement = document.querySelector(`#${id}`);

    if (searchElement !== undefined) {
        searchElement.parentElement.removeChild(searchElement);
    }
}
