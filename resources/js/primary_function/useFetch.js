import {inject, ref, toValue, watchEffect} from "vue";
import {createAlerts} from "@/primary_function/alerts.js";


export function addAlert(status) {
    const errors = inject('errors')
    const lang = inject('lang')
    let countAlerts = errors.value.length
    let id =

    errors.value.push({
        mesage: mesage,
        id: id,
        status: status,
    });

    setTimeout(() => {
        errors.value.splice(countAlerts, 1);
    }, 5000)
}


export function useFetch(url) {
    const data = ref(null)
    const error = ref(null)
    const status = ref(null);

    watchEffect(() => {
       error.value = null;

       fetch(toValue(url), {
           headers: {
               'Content-Type': 'application/json',
               'Accept': 'application/json',
           },
       })
           .then((response) => {
               status.value = response.status;

               if (response.status !== 200) throw Error('Error status code');
               else {
                   status.value = 200;
                   return response.json()
               }
           })
           .then((json) => {
               data.value = json;
           })
           .catch((err) => {
               if (status.value === null) status.value = 500;
               error.value = err;
           })

        addAlert(status.value);
    });

    return { data, error }
}

export function useFetchDeleted(urlApi) {
    const status = ref(null);

    fetch(urlApi, {
        method: "delete"
    })
        .then(response => {
            status.value = response.status;
            if (response.status !== 200) {
                throw Error('Error status code');
            }
        })
        .catch(err => {
            if (status.value === null) {
                status.value = 500;
            }
        });

    addAlert(status.value);
}

export function useFetchPut(url, updateDate) {
    const errorPut = ref(null);
    const dataPut = ref(null);
    const status = ref(null)

    fetch(url, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: updateDate,
    })
        .then(response => {
            status.value = response.status;

            if (response.status === 200) {
                return response.json();
            } else {
                throw Error('Error status code');
            }
        })
        .then( (json) => {
            dataPut.value = json;
        })
        .catch(err => {
            if (status.value === null) {
                status.value = 500;
            }
            errorPut.value = err;
        })
    addAlert(status.value);

    return { dataPut, errorPut };
}


export function getUrlByDataSetName(dataSet) {
    try {
        const url = document.querySelector(`input[${dataSet}]`).value ?? "";
        return url;
    } catch (e) {
        return null;
    }
}

export function getUrl() {
    const url = ref(null);
    const urlApi = ref(null);
    const urlCreate = ref(null);
    const urlUpdate = ref(null);

    url.value = getUrlByDataSetName('data-url');
    urlApi.value = getUrlByDataSetName('data-url-api');
    urlCreate.value = getUrlByDataSetName('data-url-create');
    urlUpdate.value = getUrlByDataSetName('data-url-update');

    return { url, urlApi, urlCreate, urlUpdate };
}


export function useFetchPost(url, updateDate) {
    const errorPost = ref(null);
    const dataPost = ref(null);
    const status = ref(null)

    fetch(toValue(url), {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: updateDate,
    })
        .then(response => {
            status.value = response.status
            if (response.status !== 200) throw Error('Error response code');
            else return response.json();
        })
        .then(jsonRes => {
            dataPost.value = jsonRes;
        })
        .catch(err => {
            if (status.value === null) {
                status.value = 500;
            }
            errorPost.value = err;
        })

    addAlert(status.value);

    return { dataPost, errorPost };
}

