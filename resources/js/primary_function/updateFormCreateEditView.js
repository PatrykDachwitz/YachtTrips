import {changeFormDataToJson, changeJsonToArray} from "@/primary_function/conversionType.js";
import {useFetchPut} from "@/primary_function/useFetch.js";
import {watch} from "vue";

export function changePositionForm() {
    const formShow = document.querySelector('form[data-show-form]');
    const containerForm = document.querySelector('[data-show-form-container]');

    containerForm.append(formShow);

    formShow.classList.remove('d-none');
}

export function active(content) {
    const contentShow = document.querySelectorAll('div[data-content-show]');
    contentShow.forEach(item => {
        item.classList.remove('d-none');
        item.classList.add('d-none');
    })
    document.querySelector(`div[data-content-show='${content}']`).classList.remove('d-none');
}

function getAllInput(classInput = null) {
    if (classInput == null) {
        return document.querySelectorAll('*[data-form-main]');
    } else {
        return document.querySelectorAll(`*.${classInput}[data-form-main]`);
    }
}

function getErrorContainer(errors, name) {
    const container = document.createElement('div');
    container.classList.add('invalid-feedback');
    container.dataset.errorsContent = name;

    container.innerText = errors;

    return container;
}


function setInvalidInInput(input, errors) {

    input.parentElement.appendChild(getErrorContainer(errors, input.name));
    input.classList.add('is-invalid');

}

function setValidInInput(input) {
    input.classList.add('is-valid')
}

function clearErrorsContainer() {

}

function clearSelectClass(inputs, classClear) {
    inputs.forEach(input => {
        input.classList.remove(`${classClear}`);
    });
}

function clearContentErrorInputs(inputs) {
    inputs.forEach(input => {
        let errorContent = document.querySelector(`div[data-errors-content='${input.name}']`);

        input.parentElement.removeChild(errorContent);
    });
}
export function clearValidAndInvalidContent() {
    const invalidInputs = getAllInput('is-invalid');
    const validInputs = getAllInput('is-valid');

    clearSelectClass(invalidInputs, 'is-invalid');
    clearSelectClass(validInputs, 'is-valid');

    clearContentErrorInputs(invalidInputs);
}

export function updateErrorsInForm(errors) {
    const inputs = getAllInput();
    clearValidAndInvalidContent();

    inputs.forEach(input => {
        let inputName = input.name;

        if (errors[inputName] !== undefined) {
            setInvalidInInput(input, errors[inputName]);
        } else {
            setValidInInput(input);
        }
    });
}

export function updateValueInform(data) {
    data.forEach(value => {
        for (let key in value) {
            changeValueInForm(key, value[key]);
        }
    })
}
function changeValueInForm(name, value) {

    if (name == 'description') {
        document.querySelector(`textarea[name='${name}']`).innerText = value;
    } else if (name !== 'images') {
        try {
            document.querySelector(`input[name='${name}']`).value = value;
        } catch (e) {
            try {
                document.querySelector(`select[name='${name}'] > option[value='${value}']`).selected = true;
            } catch (er) {
            }
        }
    }
}

export function downloadDataForm() {
    let form = document.querySelector('form[data-show-form]');

    let formData =  new FormData(form);
    let jsonData = changeFormDataToJson(formData);

    return jsonData;
}

export function updateIssetInput(data) {
    const dataJson = changeJsonToArray(data);

    updateValueInform(dataJson);
}

export function updateForm() {
    let formData = downloadDataForm();

    let { dataPut, errorPut } = useFetchPut(urlUpdate, formData);
    watch(dataPut, () => {
        clearValidAndInvalidContent();
        updateIssetInput(dataPut);
    })

    watch(errorPut, () => {
        errorPut.value.then(test => {
            updateErrorsInForm(test.errors);
        })
    })


}

