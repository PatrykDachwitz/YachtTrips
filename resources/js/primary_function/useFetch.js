import {inject, ref, toValue, watchEffect} from "vue";
import {createAlerts} from "@/primary_function/alerts.js";

function createAlert(status) {
    //createAlerts(status);
    // const errorsAlert = inject('errors');
    // console.log(errorsAlert);
    // errorsAlert.value.push(status);
}

export function useFetch(url) {
    const data = ref(null)
    const error = ref(null)


    watchEffect(() => {
       error.value = null;

       fetch(toValue(url), {
           headers: {
               'Content-Type': 'application/json',
               'Accept': 'application/json',
           },
       })
           .then((res) => {
               if (res.status !== 200) throw Error(res.status);
               else return res.json();
           })
           .then((json) => {
               data.value = json;
               createAlert(200);
           })
           .catch((err) => {
               createAlert(err);
               error.value = err;
           })
    });

    return { data, error }
}

export function useFetchDeleted(urlApi) {
    const status = ref(null);
    console.log(urlApi)
    fetch(urlApi, {
        method: "delete"
    })
        .then(response => {
            createAlert(response.status);
            status.value = response.status;
        })
        .catch(err => {
            createAlert(err)
        });

    return { status };
}

export function useFetchPut(url, updateDate) {
    const errorPut = ref(null);
    const dataPut = ref(null);


    fetch(url, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: updateDate,
    })
        .then(response => {
            if (response.status == 422) {
                createAlert(422);
                errorPut.value = response.json();
            } else if (response.status == 200) {
                createAlert(200);
                dataPut.value = response.json();
            } else {
                createAlert(response.status);
                throw Error(response.status);
            }
        })
        .catch(err => {
            createAlert(err);
            console.info(err);
        })


    return { dataPut, errorPut };

}


function getUrlBuDataSetName(dataSet) {
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

    url.value = getUrlBuDataSetName('data-url');
    urlApi.value = getUrlBuDataSetName('data-url-api');
    urlCreate.value = getUrlBuDataSetName('data-url-create');
    urlUpdate.value = getUrlBuDataSetName('data-url-update');

    return { url, urlApi, urlCreate, urlUpdate };
}


export function useFetchPost(url, updateDate) {
    const errorPost = ref(null);
    const dataPost = ref(null);

    fetch(toValue(url), {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: updateDate,
    })
        .then(response => {
            if (response.status !== 200) throw Error(response.status);
            else return response.json();
        })
        .then(jsonRes => {
            console.log("Dane odp")
            console.log(jsonRes)
            createAlert(200);
            dataPost.value = jsonRes;
        })
        .catch(err => {
            createAlert(err);
            console.error("Error")
            console.error(err)
            errorPost.value = err;
        })

    return { dataPost, errorPost };
}

