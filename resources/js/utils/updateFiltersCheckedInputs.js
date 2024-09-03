export function updateFiltersCheckedInputs(data) {
    const keysInputs = Object.keys(data);

    keysInputs.forEach(keyInput => {
        searchAndUpdateInput(keyInput, data[keyInput]);
    })

}

function searchAndUpdateInput(name, value) {
    let inputSearch = document.querySelector(`[name="${name}"]`);
    if (inputSearch === null) {
        inputSearch = document.querySelector(`[name="${name}\\[\\]"]`);
    }
    switch (inputSearch.type) {
        case "checkbox":
            updateCheckBox(name, value)
            break;
        default:
            inputSearch.value = value;
            break;
    }
}

function updateCheckBox(name, values) {
    values.forEach(value => {
        document.querySelector(`[name="${name}\[\]"][value="${value}"]`).checked = true;
    })
}
