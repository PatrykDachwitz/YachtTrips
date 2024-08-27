export function addErrorForm(errors) {

    errors.then(responseError => {
        return responseError.errors;
    })
        .then(errors => {
            const errorsKeys = Object.keys(errors);

            clearInfoAboutValid();

            errorsKeys.forEach(key => {
                addMsgError(key, errors[key]);
            })

            addClassValid();
        })

}
function clearInfoAboutValid() {
    removeContainersError();

    removeClassInAllAvailable('is-invalid');
    removeClassInAllAvailable('is-valid');
}

function removeClassInAllAvailable(className) {
    const elementsTarget = document.querySelectorAll(`.${className}`);

    elementsTarget.forEach(element => {
       element.classList.remove(className);
    });

}
function removeContainersError() {
    const containersError = document.querySelectorAll('div.invalid-feedback');

    containersError.forEach(container => {
        container.parentElement.removeChild(container);
    })
}
function getContainerError(value) {
    const container = document.createElement('div');
    container.classList.add('invalid-feedback');
    container.innerText = value;

    return container;
}
function addMsgError(key, value) {
    const containerMsg = getContainerError(value);
    const input = document.querySelector(`input[name="${key}"]`);
    input.classList.add('is-invalid');

    input.parentElement.appendChild(containerMsg);
}

function addClassValid() {
    addValidClassFor('input');
    addValidClassFor('select');
}

function addValidClassFor(target) {
    const targets = document.querySelectorAll(target);

    targets.forEach(item => {
        if (!item.classList.contains('is-invalid') && item.value !== "") {
            item.classList.add('is-valid')
        }
    })
}
