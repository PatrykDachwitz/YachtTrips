import {inject, ref, toValue, watchEffect} from "vue";

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

    get(url) {
        ///console.info(url)
        const dataGet = ref(null);
        watchEffect(() => {
            dataGet.value = null;
            fetch(toValue(url))
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


        return response.json();
    }


}
