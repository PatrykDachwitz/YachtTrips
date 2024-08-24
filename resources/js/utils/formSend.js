import {variationPlacements} from "@popperjs/core";

export function getInputsForm() {
    const inputs = getAllInputs();

    return getCompleteInputs(inputs);
}

function getCompleteInputs(data) {
    const responseInputs = {};

    Object.keys(data).map((key, value) => {

        if (data[key] !== null && data[key] !== "") {
            responseInputs[key] = data[key];
        }
    })

    return responseInputs;
}

function getAllInputs() {
    const formData = new FormData(document.querySelector(`form[data-form]`));
    return Object.fromEntries(formData);
}
