export class CustomFormData {

    customFormData;
    additionalJson = {};

    setFormObject(formObject) {
        this.customFormData = new FormData(formObject);
    }

    setCustomJsonValue(additionalJson) {
        this.additionalJson = additionalJson;
    }
    getJson() {
        this.customFormData.forEach((value, key) => {
            if (value !== "") {
                this.additionalJson[key] = value;
            }

        });

        return JSON.stringify(this.additionalJson);
    }

}
