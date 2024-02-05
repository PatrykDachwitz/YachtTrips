import {changeJsonToArray} from "@/primary_function/conversionType.js";

export class VacationersErrors {
    formContainer;
    issetError;
    countActionDeclare;
    completedActionDeclare;

    constructor(formContainer) {
        this.formContainer = document.querySelector(`form[${formContainer}]`);
    }

    declareCountInputs(countInputsToAction) {
        this.clearCommunique();
        this.countActionDeclare = countInputsToAction;
        this.completedActionDeclare = 0;
        this.issetError = false;
    }

    appendSuccess(idInput, idBook) {
        this.completedActionDeclare++;
        this.updateInputsSuccess(idInput, idBook);

        if (this.completedActionDeclare >= this.countActionDeclare && this.issetError === false) {
            return true;
        }
    }

    getInputsByDataSets(idInput, idBook) {
        return document.querySelectorAll(`input[data-book-id="${idBook}"][data-vacationer-id="${idInput}"]`);
    }
    updateInputsSuccess(idInput, idBook) {
        let inputsChange = this.getInputsByDataSets(idInput, idBook);
        inputsChange.forEach(inputChange => {
            if (inputChange.type !== 'hidden') {
                this.setIsValidInInput(inputChange);
            }
        })
    }
    setIsValidInInput(input) {
        input.classList.add('is-valid')
    }

    clearCommunique() {
        this.clearContainerWithError();
        this.clearClassInInputs('is-valid');
        this.clearClassInInputs('is-invalid');
    }

    getInputsByClass(className) {
        return document.querySelectorAll(`input.${className}`);
    }
    clearClassInInputs(className) {
        let inputsHasSearchClass = this.getInputsByClass(className);
        inputsHasSearchClass.forEach(inputHasSearchClass => {
            inputHasSearchClass.classList.remove(className) ;
        });
    }
    getContainersWithError() {
        return document.querySelectorAll('.custom-invalid-communique');
    }
    clearContainerWithError() {
        let containersWithError = this.getContainersWithError();

        containersWithError.forEach(containerError => {
            containerError.parentElement.removeChild(containerError);
        });
    }

    setInvalidInInput(input, errors) {
        input.parentElement.parentElement.appendChild(this.getErrorContainer(errors, input.name));
        input.classList.add('is-invalid');
    }

    getErrorContainer(errors, name) {
        const container = document.createElement('div');
        container.classList.add('text-danger', 'custom-invalid-communique');
        container.dataset.errorsContent = name;
        container.innerText = errors;
        return container;
    }

    getKeysHasError(errors) {
        let keyHasError = [];

        Object.keys(errors).map(key => {
            keyHasError.push(key);
        });

        return keyHasError;
    }

    updateInputsErrors(idInput, idBook, errors) {
        let inputsChange = this.getInputsByDataSets(idInput, idBook);
        let keysInputHasError = this.getKeysHasError(errors);

         inputsChange.forEach(inputChange => {
             if (!keysInputHasError.includes(inputChange.name) && inputChange.type !== 'hidden') {
                 this.setIsValidInInput(inputChange);
             } else if (inputChange.type !== 'hidden') {
                 this.setInvalidInInput(inputChange, errors[inputChange.name]);
             }
         });
    }

    appendErrors(idInput, idBook, errors) {
        this.completedActionDeclare++;
        this.issetError = true;

         errors.value.then(error => {
             this.updateInputsErrors(idInput, idBook, error.errors)
         });
    }

}
