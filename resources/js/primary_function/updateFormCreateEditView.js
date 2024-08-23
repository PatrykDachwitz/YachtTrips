export function changePositionForm() {
    const formShow = document.querySelector('form[data-show-form]');
    const containerForm = document.querySelector('[data-show-form-container]');

    containerForm.append(formShow);

    formShow.classList.remove('d-none');
}


function setInvalidInInput(input, errors) {

    input.parentElement.appendChild(getErrorContainer(errors, input.name));
    input.classList.add('is-invalid');

}

function setValidInInput(input) {
    input.classList.add('is-valid')
}

function clearContentErrorInputs(inputs) {
    inputs.forEach(input => {
        let errorContent = document.querySelector(`div[data-errors-content='${input.name}']`);

        input.parentElement.removeChild(errorContent);
    });
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




