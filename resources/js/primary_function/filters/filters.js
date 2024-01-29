import {CustomGetParams} from "@/primary_function/filters/customGetParams.js";

export class Filters {

    formFilter;
    clearUrl;
    customParamsGet;
    constructor(formName, url) {
        this.formFilter = document.querySelector('form[data-form-files]');
        this.clearUrl = url;
    }

    getActiveInputs() {
        let activeInputs = [];
        let inputsForm = this.formFilter.querySelectorAll('input');
        inputsForm.forEach(inputForm => {
            if (inputForm.checked === true) {
                activeInputs.push(inputForm);
            } else if(inputForm.type === 'text' && inputForm.value !== '') {
                activeInputs.push(inputForm);
            }
        })

        return activeInputs;
    }


    getParamsForm() {
        this.customParamsGet = new CustomGetParams();
        this.customParamsGet.setInputs(this.getActiveInputs());

        return this.customParamsGet.getParams();
    }

    getUpdateUrl() {
        let newUrlApi = `${this.clearUrl}${this.getParamsForm()}`;
        console.info(newUrlApi)
        return newUrlApi;
    }
}
