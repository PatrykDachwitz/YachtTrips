export function completeDataForm(data) {
    const availableName = Object.keys(data);

    availableName.forEach(nameInput => {
        let searchInput = document.querySelector(`[name="${nameInput}"]`);

        if (searchInput !== null) {
            if (data[nameInput] === false) {
                searchInput.value = 0;
            } else if(data[nameInput] === true) {
                searchInput.value = 1;
            } else {
                searchInput.value = data[nameInput];
            }
        }
    })
}
