import {ref, watch} from "vue";
import {useFetch} from "@/primary_function/useFetch.js";

export class Filters {
    #urlOptions;
    #nameOptions;
    optionsFilters = ref([]);

    constructor(filtersName) {
        this.#urlOptions = new Map();
        this.#downloadUrlApi(filtersName);
        this.#downloadApiOptions();
    }

    #downloadUrlApi(filtersName) {
        const filtersInput = document.querySelectorAll(`input[${filtersName}]`);
        filtersInput.forEach(filterInput => {
            this.#urlOptions.set(filterInput.name, filterInput.value);
        })
    }

    #addOptionVariables(data) {
        let optionsId = [];

        data.value.forEach(value => {
            console.log(value);
            optionsId.push(value.id);
        })

        console.log(optionsId)
        return optionsId;
    }

    #downloadApiOptions() {

        this.#urlOptions.forEach((url, name) => {

            let { data } = useFetch(url);

            watch(data, () => {
                let options = this.#addOptionVariables(data);
                this.optionsFilters.value[name] = options;

                console.error(this.optionsFilters.value);
            });
        });
    }


    getFilters() {
        return this.optionsFilters.value;
    }
}
