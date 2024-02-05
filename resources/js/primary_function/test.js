class Test {
    clearContentErrorInputs(inputs) {
        inputs.forEach(input => {
            let errorContent = document.querySelector(`div[data-errors-content='${input.name}']`);

            input.parentElement.removeChild(errorContent);
        });
    }
    clearValidAndInvalidContent() {
        const invalidInputs = this.getAllInput('is-invalid');
        const validInputs = this.getAllInput('is-valid');

        this.clearSelectClass(invalidInputs, 'is-invalid');
        this.clearSelectClass(validInputs, 'is-valid');

        this.clearContentErrorInputs(invalidInputs);
    }
    clearSelectClass(inputs, classClear) {
        inputs.forEach(input => {
            input.classList.remove(`${classClear}`);
        });
    }
    getAllInput(classInput = null, idInput, idBook) {
        if (classInput == null) {
            return document.querySelectorAll(`*[data-form-main][data-vacationer-id="${idInput}"][data-book-id="${idBook}"]`);
        } else {
            return document.querySelectorAll(`*.${classInput}[data-form-main][data-vacationer-id="${idInput}"][data-book-id="${idBook}"]`);
        }
    }
    setInvalidInInput(input, errors) {
        input.parentElement.appendChild(this.getErrorContainer(errors, input.name));
        input.classList.add('is-invalid');
    }
    setValidInInput(input) {
        input.classList.add('is-valid')
    }
    getErrorContainer(errors, name) {
        const container = document.createElement('div');
        container.classList.add('invalid-feedback');
        container.dataset.errorsContent = name;
        container.innerText = errors;
        return container;
    }
    updateErrorsInForm(errors, idInput, idBook) {
        const inputs = this.getAllInput(idInput, idBook);

        inputs.forEach(input => {
            let inputName = input.name;

            if (errors[inputName] !== undefined) {
                this.setInvalidInInput(input, errors[inputName]);
            } else {
                this.setValidInInput(input);
            }
        });
    }

}
