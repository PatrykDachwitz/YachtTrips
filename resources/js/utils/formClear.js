export function formClear() {
    clearInputs();

    clearSelectInput();
}

function clearSelectInput() {
    const selectInputs = document.querySelectorAll('select');

    selectInputs.forEach(item => {
        item.selectedIndex = 0
    })
}
function clearInputs() {
    const inputs = document.querySelectorAll('input');


    inputs.forEach(item => {
        item.value = "";
    })
}
