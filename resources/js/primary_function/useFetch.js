import { ref, toValue, watchEffect } from "vue";

export function useFetch(url) {
    const date = ref(null)
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
           .then((json) => (date.value = json))
           .catch((err) => {
               error.value = 404;
           })
    });

    //console.log(date);
    return { date, error }
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
    const error = ref(null);
    const date = ref(null);
    fetch(url, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(updateDate),
    })
        .then(response => {
            if (response.status !== 200) throw Error('Error status');
            else return response.json;
        })
        .then(json => {
            date.value = json;
        })
        .catch(err => {
            error.value = err;
        })

    return { date, error };
}

export function getUrl() {
    const url = ref(null);
    const urlApi = ref(null);

    url.value = document.querySelector("input[data-url]").value ?? "";
    urlApi.value = document.querySelector("input[data-url-api]").value ?? "";
    return { url, urlApi };
}
