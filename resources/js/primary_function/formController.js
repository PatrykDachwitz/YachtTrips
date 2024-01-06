import {CustomFormData} from "@/primary_function/CustomFormData.js";
import {inject, ref, watch} from 'vue';
import {useFetchPost, useFetchPut} from "@/primary_function/useFetch.js";

import {changeJsonToArray} from "@/primary_function/conversionType.js";
import {CustomJson} from "@/primary_function/CustomJson.js";
import data from "bootstrap/js/src/dom/data.js";
export class FormController {

    mainForm;
    customFormData;
    urlApi;
    activeImages = false;
    additionalInputsName = [];
    customJson;
    constructor(mainForm, urlApi) {
        this.mainForm = document.querySelector(`form[${mainForm}]`);
        this.customFormData = new CustomFormData();
        this.urlApi = urlApi;
        this.customJson = new CustomJson();
    }

    getValueInInputs(additionalInput) {

        if (additionalInput.multiData) {
            let date = [];
            let inputsDom = document.querySelectorAll(`[name='["${additionalInput.name}"][]']`);

            inputsDom.forEach(inputDom => {
                date.push(inputDom.value);
            })

            return date;
        } else if(!additionalInput.multiData) {
            return document.querySelector(`[name="${additionalInput.name}"]`).value;
        }
    }

    getValueAdditionalInputs() {
        const additionalJson = {};
        this.additionalInputsName.forEach(additionalInput => {

            let dateInputs = this.getValueInInputs(additionalInput);
            additionalJson[additionalInput.name] = dateInputs;

        });

        if (this.activeImages == true) additionalJson['images'] = this.getValueImages();

        return additionalJson;
    }

    getDomObjectImages() {

        const devicesContainer = document.querySelectorAll(`[name='images["devices"][]']`)
        const idContainer = document.querySelectorAll(`[name='images["id"][]']`)

        return { devicesContainer, idContainer }
    }


    getValueImages() {
        const { idContainer, devicesContainer } = this.getDomObjectImages();
        const margeDetailsAboutImages = [];
        for (let i = 0; i < idContainer.length; i++) {
            margeDetailsAboutImages.push({
                id: idContainer[i].value,
                devices: devicesContainer[i].value
            });
        }

        return margeDetailsAboutImages;
    }
    getInputsToSend() {
        const additionalInputsValue = this.getValueAdditionalInputs();

        this.customFormData.setFormObject(this.mainForm);
        this.customFormData.setCustomJsonValue(additionalInputsValue);

        return this.customFormData.getJson();
    }

    getAllInput(classInput = null) {
        if (classInput == null) {
            return document.querySelectorAll('*[data-form-main]');
        } else {
            return document.querySelectorAll(`*.${classInput}[data-form-main]`);
        }
    }

    clearValidAndInvalidContent() {
        const invalidInputs = this.getAllInput('is-invalid');
        const validInputs = this.getAllInput('is-valid');

        this.clearSelectClass(invalidInputs, 'is-invalid');
        this.clearSelectClass(validInputs, 'is-valid');

        this.clearContentErrorInputs(invalidInputs);
    }

    clearContentErrorInputs(inputs) {
        inputs.forEach(input => {
            let errorContent = document.querySelector(`div[data-errors-content='${input.name}']`);

            input.parentElement.removeChild(errorContent);
        });
    }

    clearSelectClass(inputs, classClear) {
        inputs.forEach(input => {
            input.classList.remove(`${classClear}`);
        });
    }

    create() {
        const updateData = this.getInputsToSend();
        let { dataPost, errorPost } = useFetchPost(this.urlApi, updateData);

        watch(dataPost, () => {
            window.location.href = dataPost.value.url;
        })


        watch(errorPost, () => {
            errorPost.value.then(test => {
                this.updateErrorsInForm(test.errors);
            })
        })
    }
    update() {


        const updateData = this.getInputsToSend();

        console.info(updateData);

        let { dataPut, errorPut } = useFetchPut(this.urlApi, updateData);

        watch(dataPut, () => {
            this.clearValidAndInvalidContent();
            this.updateIssetInput(dataPut);
        })

        console.log(dataPut);
        console.log(errorPut);

        watch(errorPut, () => {

            errorPut.value.then(test => {
                this.updateErrorsInForm(test.errors);
            })
        })

        return { dataPut, errorPut }
    }

    updateErrorsInForm(errors) {
        const inputs = this.getAllInput();
        this.clearValidAndInvalidContent();

        inputs.forEach(input => {
            let inputName = input.name;

            if (errors[inputName] !== undefined) {
                this.setInvalidInInput(input, errors[inputName]);
            } else {
                this.setValidInInput(input);
            }
        });
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

    updateIssetInput(data) {
        const dataJson = changeJsonToArray(data);

        this.updateValueInform(dataJson);
    }

    updateValueInform(data) {
        data.forEach(value => {
            for (let key in value) {
                this.changeValueInForm(key, value[key]);
            }
        })
    }

    changeValueInForm(name, value) {

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

    setCurrenActiveImages(activeImages) {
        this.activeImages = activeImages;
    }
    setAdditionalInputsName(name, multiData = false) {
        this.additionalInputsName.push({
            name,
            multiData
        });
    }

}
