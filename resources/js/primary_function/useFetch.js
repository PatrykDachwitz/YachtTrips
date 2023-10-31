import { ref, toValue, watchEffect } from "vue";

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
           .then((json) => (data.value = json))
           .catch((err) => {
               error.value = 404;
           })
    });

    //console.log(date);
    return { data, error }
}

export function useFetchDeleted(urlApi) {
    const status = ref(null);
    console.log(urlApi)
    fetch(urlApi, {
        method: "delete"
    })
        .then(response => {
            status.value = response.status;
        });

    return { status };
}

export function useFetchPut(url, updateDate) {
    const errorPut = ref(null);
    const dataPut = ref(null);

    fetch(toValue(url), {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: updateDate,
    })
        .then(response => {
            if (response.status !== 200) throw Error('Error status');
            else return response.json();
        })
        .then(jsonRes => {
            console.log("DAne odp")
            console.log(jsonRes)
            dataPut.value = jsonRes;
        })
        .catch(err => {
            console.error("ERror")
            console.error(err)
            errorPut.value = err;
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
            if (response.status !== 200) throw Error('Error status');
            else return response.json();
        })
        .then(jsonRes => {
            console.log("Dane odp")
            console.log(jsonRes)
            dataPost.value = jsonRes;
        })
        .catch(err => {
            console.error("Error")
            console.error(err)
            errorPost.value = err;
        })

    return { dataPost, errorPost };
}

