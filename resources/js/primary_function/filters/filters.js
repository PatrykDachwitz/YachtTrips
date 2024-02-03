import {CustomGetParams} from "@/primary_function/filters/customGetParams.js";

export class Filters {

    formFilter;
    clearUrlApi;
    urlSite;
    customParamsGet;
    constructor(formName, urlApi, urlSite) {
        this.formFilter = document.querySelector('form[data-form-files]');
        this.clearUrlApi = urlApi;
        this.urlSite = urlSite;
    }

    getActiveInputs() {
        let activeInputs = [];
        let inputsForm = this.formFilter.querySelectorAll('input');
        inputsForm.forEach(inputForm => {
            if (inputForm.checked === true) {
                activeInputs.push(inputForm);
            } else if(inputForm.type === 'text' && inputForm.value !== '') {
                activeInputs.push(inputForm);
            } else if(inputForm.type === 'hidden' && inputForm.name === 'page') {
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
        let newParamQuery = this.getParamsForm();
        let newUrlApi = `${this.clearUrlApi}${newParamQuery}`;
        let newUrlSite = `${this.urlSite}${newParamQuery}`;
        return { newUrlApi, newUrlSite };
    }
}
