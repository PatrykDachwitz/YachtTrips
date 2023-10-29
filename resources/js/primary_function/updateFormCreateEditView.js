import {changeFormDataToJson, changeJsonToArray} from "@/primary_function/conversionType.js";

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


export function updateValueInform(data) {
    data.forEach(value => {
        for (let key in value) {
            changeValueInForm(key, value[key])
        }
    })
}
function changeValueInForm(name, value) {
    if (name == 'description') {
        document.querySelector(`textarea[name='${name}']`).innerText = value
    } else {
        try {
            document.querySelector(`input[name='${name}']`).value = value;
        } catch (e) {
            try {
                document.querySelector(`select[name='${name}'] > option[value='${value}']`).selected = true;
            } catch (e) {
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
