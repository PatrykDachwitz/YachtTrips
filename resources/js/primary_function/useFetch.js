import { ref, toValue, watchEffect } from "vue";

export function useFetch(url) {
    const date = ref(null)
    const error = ref(null)

    watchEffect(() => {
       error.value = null;

       fetch(toValue(url))
           .then((res) => res.json())
           .then((json) => (date.value = json))
           .catch((err) => (error.value = error))
    });

    return { date, error }
}

export function useFetchDeleted(urlApi) {
    const status = ref(null);

    fetch(urlApi, {
        method: "delete"
    })
        .then(response => {
            status.value = response.status;
        });

    return { status };
}

export function getUrl() {
    return document.querySelector("input[data-url]").value ?? "";
}
