import { ref, toValue, watchEffect } from "vue";

export function useFetch(url) {
    const date = ref(null)
    const error = ref(null)


    watchEffect(() => {
       error.value = null;

       fetch(toValue(url))
           .then((res) => {
               return res.json();
           })
           .then((json) => (date.value = json))
           .catch((err) => {
               error.value = err;
           })
    });

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

export function getUrl() {
    const url = ref(null);
    const urlApi = ref(null);

    url.value = document.querySelector("input[data-url]").value ?? "";
    urlApi.value = document.querySelector("input[data-url-api]").value ?? "";
    return { url, urlApi };
}
