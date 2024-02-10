import {inject, ref, toValue, watchEffect} from "vue";
import {addAlert} from "@/primary_function/alerts.js";


function getCsrfToken() {
    return document.querySelector('meta[name="X-CSRF-Token"]').content;
}


export function useFetchSendFiles(files) {
    const data = ref(null)
    const error = ref(null)
    const status = ref(null);

    const url = getUrlByDataSetName('data-file')

    fetch(url, {

        method: "POST",
        headers: {
            //'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-Token': getCsrfToken(),
        },
        body: files,

    })
        .then((response) => {
            data.value = response.json();
            addAlert(response.status);
        })
        .catch(err => {
            addAlert(500);
        })

    ;

    return { data, error, status }
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
               'X-CSRF-Token': getCsrfToken(),
           },
       })
           .then((response) => {
               if (response.status !== 200) {
                   status.value = response.status;
                   addAlert(status.value);
                   throw Error('Error status code');
               }
               else {
                   addAlert(200);
                   return response.json()
               }
           })
           .then((json) => {
               data.value = json;
           })
           .catch((err) => {
               if (status.value === null) addAlert(500);
               error.value = err;
           })
    });

    return { data, error, status }
}

export function useFetchDeleted(urlApi) {
    const status = ref(null);
    const errors = ref(null);

    fetch(urlApi, {
        headers: {
            'X-CSRF-Token': getCsrfToken(),
        },
        method: "delete",
        })

        .then(response => {

            if (response.status === 200) {
                addAlert(200);
            } else {
                addAlert(response.status);
                throw Error('Error status code');
            }
        })
        .catch(err => {
            errors.value = err;
            if (status.value === null) {
                addAlert(500);
            }
        });

    return {errors};
}

export function useFetchPut(url, updateDate) {
    const errorPut = ref(null);
    const dataPut = ref(null);
    const status = ref(null);

    fetch(url, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-Token': getCsrfToken(),
        },
        body: updateDate,
    })
        .then(response => {
            if (response.status === 200) {
                addAlert(200);
                return response.json();
            } else {
                addAlert(response.status);
                errorPut.value = response.json();
                throw Error(`${response.status}`);
            }
        })
        .then( (json) => {
            dataPut.value = json;
        })
        .catch(err => {
            errorPut.value = err;
            if (status.value === null) {
                addAlert(500);
            }
        })

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
    const urlApiDelete = ref(null);

    url.value = getUrlByDataSetName('data-url');
    urlApi.value = getUrlByDataSetName('data-url-api');
    urlCreate.value = getUrlByDataSetName('data-url-create');
    urlUpdate.value = getUrlByDataSetName('data-url-update');
    urlApiDelete.value = getUrlByDataSetName('data-url-delete');

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
            'X-CSRF-Token': getCsrfToken(),
        },
        body: updateDate,
    })
        .then(response => {

            if (response.status !== 301) {
                status.value = response.status
                addAlert(response.status);
                errorPost.value = response.json();
                throw Error(`${response.status}`);
            } else {
                addAlert(301);
                return response.json();
            }
        })
        .then(jsonRes => {
            dataPost.value = jsonRes;
        })
        .catch(err => {
            if (status.value === null) {
                addAlert(500);
            }
        })

    return { dataPost, errorPost };
}

