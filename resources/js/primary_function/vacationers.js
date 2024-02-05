import {inject, ref, watch} from "vue";
import {useFetchPost, useFetchPut} from "@/primary_function/useFetch.js";
import {VacationersErrors} from "@/primary_function/vacationersErrors.js";

export class Vacationers {

    formContainer;
    urlApi;
    vacationerContainers;
    vacationersErrors;
    completedToNextStep;

    defaultUpdateInput = [
        "age",
        "first_name",
        "last_name",
        "book_id",
    ];

    constructor(formContainer, urlApi) {
        this.formContainer = `form[${formContainer}]`;
        this.urlApi = urlApi;
        this.vacationersErrors = new VacationersErrors(formContainer);
        this.completedToNextStep = ref(null);
    }

    updateVacationersContainers() {
        this.vacationerContainers = document.querySelectorAll('[data-vacationer-content]');
    }

    isNewVacationer(vacationer) {
        if (vacationer.querySelector('input[name=\'id\']') === null) {
            return true;
        } else {
            return false;
        }
    }

    getInputsValue(vacationer) {
        let valueVacationer = {
            "age": vacationer.querySelector('input[name=\'age\']').value,
            "first_name": vacationer.querySelector('input[name=\'first_name\']').value,
            "last_name": vacationer.querySelector('input[name=\'last_name\']').value,
            "book_id": vacationer.querySelector('input[name=\'book_id\']').value,
            "vacationer_id": vacationer.querySelector('input[name=\'book_id\']').dataset.vacationerId,
        }

        return  valueVacationer;
    }

    setVacationer(vacationer) {
        let valueVacationer = this.getInputsValue(vacationer);

        let { dataPost, errorPost } = useFetchPost(this.urlApi, JSON.stringify(valueVacationer));

        watch(dataPost, () => {
            if (this.vacationersErrors.appendSuccess(valueVacationer.vacationer_id, valueVacationer.book_id)) {
                this.completedToNextStep.value = true;
            }
        })


        watch(errorPost, () => {
            this.vacationersErrors.appendErrors(valueVacationer.vacationer_id, valueVacationer.book_id, errorPost)
        })

    }

    getUrlWithIdUpdateVacationer(vacationer) {
        try {
            let id = vacationer.querySelector('input[name=\'id\']').value;
            return `${this.urlApi}/${id}`;
        } catch (e) {
            return this.urlApi;
        }
    }
    updateVacationer(vacationer) {
        let valueVacationer = this.getInputsValue(vacationer);


        let { dataPut, errorPut } = useFetchPut(this.getUrlWithIdUpdateVacationer(vacationer), JSON.stringify(valueVacationer));

        watch(dataPut, () => {
            if (this.vacationersErrors.appendSuccess(valueVacationer.vacationer_id, valueVacationer.book_id)) {
                this.completedToNextStep.value = true;
            }
        })


        watch(errorPut, () => {
            this.vacationersErrors.appendErrors(valueVacationer.vacationer_id, valueVacationer.book_id, errorPut)
        })
    }


    update() {
        this.updateVacationersContainers();

        this.vacationersErrors.declareCountInputs(this.vacationerContainers.length);

        this.vacationerContainers.forEach(vacationer => {
            if (this.isNewVacationer(vacationer)) {
                this.setVacationer(vacationer);
            } else {
                this.updateVacationer(vacationer);
            }
        })

        return this.completedToNextStep;
    }
}
