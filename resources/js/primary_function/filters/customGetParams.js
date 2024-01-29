export class CustomGetParams {

    readyParams;
    inputs;
    saveParams = [];
    extensionNamesInput = [
        'page',
        'start_day',
        'end_day',
    ];

    isMultiValue(name) {
        if (name.includes('[]')) {
            return true;
        } else {
            return false;
        }
    }

    inputNameIsset(name) {
        if (this.saveParams[`${name}`] >= 0) {
            return true;
        } else {
            return false;
        }
    }

    exceptionInputsName(name) {
        return this.extensionNamesInput.includes(name);
    }

    getClearName(name) {
        return name.split('[')[0];
    }

    addNotExceptionsParams(name, value) {

        if (this.inputNameIsset(name) && this.isMultiValue(name)) {
            this.saveParams[`${name}`] += 1;
            let clearName = this.getClearName(name);
            this.readyParams = `${this.readyParams}&filters[${clearName}][${this.saveParams[`${name}`]}]=${value}`;
        } else if (!this.inputNameIsset(name) && this.isMultiValue(name)) {
            this.saveParams[`${name}`] = 1;
            let clearName = this.getClearName(name);
            this.readyParams = `${this.readyParams}&filters[${clearName}][0]=${value}`;
        } else {
            return false;
        }

    }

    updateParamsByInputs(inputs) {
        inputs.forEach(input => {
            let name = input.name;
            let value = input.value;
            if (this.exceptionInputsName(name)) {
                this.readyParams = `${this.readyParams}&${name}=${value}`;
            } else {
                this.addNotExceptionsParams(name, value);
            }
        })

    }
    setInputs(inputs) {
        this.inputs = inputs;
    }

    getParams() {
        this.readyParams = "";
        this.saveParams = [];
        console.info(this.inputs);
        this.updateParamsByInputs(this.inputs);
        return `?${this.readyParams}`;
    }
}
