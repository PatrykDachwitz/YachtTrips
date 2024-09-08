import {inject, ref, toValue, watchEffect} from "vue";
import {addErrorForm} from "@/utils/addErrorForm.js";

export class communicationApi {

    alerts;
    constructor() {

        this.alerts = inject('alerts');
    }

    setAlert(text, statusCode) {
       // console.log(this.alerts)
        this.alerts.value.push({
            text,
            statusCode
        })
    }
    getCsrfToken() {
        return document.querySelector('meta[name="X-CSRF-Token"]').content;
    }

    get(url) {
        ///console.info(url)
        const dataGet = ref(null);
        watchEffect(() => {
            dataGet.value = null;
            fetch(toValue(url), {
                headers: {
                    'X-CSRF-Token': this.getCsrfToken(),
                }
            })
                .then(response => {
                 //   console.log(response.status)
                    if (response.status < 300) {
                        return response.json();
                    } else {
                        throw Error;
                    }
                })
                .then(json => {
                    this.setAlert("success", 203);
                    dataGet.value = json;
                })
                .catch(err => {
                    this.setAlert("test", 500)
                });
        });

        return dataGet;
    }

    async post(url, data) {


        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-Token': this.getCsrfToken(),
            },
            body: data
        }).then(response => {
               //console.log(response.status)
            if (response.status <= 400) {
                //console.log(response.json());
                return {
                    dataPost: response.json(),
                    status: response.status
                };
            } else if (response.status === 422) {
                addErrorForm( response.json());
               // console.log(response.json());
                throw Error;
            } else {
                throw Error;
            }
        })
            .catch(err => {
                return {
                    errorPost: "",
                    status: 500
                };

            });


        return response;
    }
    async put(url, data) {

        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'X-CSRF-Token': this.getCsrfToken(),
            },
            body: data
        })/*.then(response => {
               //console.log(response.status)
            if (response.status < 300) {
                //console.log(response.json());
                return response.json();
            } else {
                console.log(response.json());
                throw Error;
            }
        })
            .then(json => {
                this.setAlert("success", 203);
                console.log(json)
                dataPost.value = json;
            })
            .catch(err => {
                this.setAlert("test", 500)
            });*/


        return {
            dataPut: response.json(),
            status: response.status
        };
    }
    async delete(url) {


        const response = await fetch(url, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-Token': this.getCsrfToken(),
            },
        })/*.then(response => {
               //console.log(response.status)
            if (response.status < 300) {
                //console.log(response.json());
                return response.json();
            } else {
                console.log(response.json());
                throw Error;
            }
        })
            .then(json => {
                this.setAlert("success", 203);
                console.log(json)
                dataPost.value = json;
            })
            .catch(err => {
                this.setAlert("test", 500)
            });*/



        return response.status;
    }


}
