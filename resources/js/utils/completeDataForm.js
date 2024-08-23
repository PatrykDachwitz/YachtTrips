export function completeDataForm(data) {
    const availableName = Object.keys(data);

    availableName.forEach(nameInput => {
        let searchInput = document.querySelector(`[name="${nameInput}"]`);

        if (searchInput !== null) {
            searchInput.value = data[nameInput];
        }
    })
}
