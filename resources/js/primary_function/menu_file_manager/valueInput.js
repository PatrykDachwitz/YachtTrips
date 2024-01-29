function getValueInputByInputName(nameInput) {
    return document.querySelector(`[name="${nameInput}"]`).value;
}

export function getJsonByInputName(nameInput, name) {
    let valueInput = getValueInputByInputName(nameInput);
    const valueSendToUpload = {};
    valueSendToUpload[name] = valueInput;

    return JSON.stringify(valueSendToUpload);
}
