export class CustomFormData {

    customFormData;
    additionalJson = {};

    setFormObject(formObject) {
        this.customFormData = new FormData(formObject);
    }

    getKysObject(searchKeysObject) {
        let keys = [];
        Object.keys(searchKeysObject).forEach((value, key) => {
            keys.push(value);
        })

        return keys;
    }
    setCustomJsonValue(additionalJson) {

        const keys = this.getKysObject(additionalJson);

        keys.forEach(key => {
            if (additionalJson[key] !== null && additionalJson[key] !== "") {
                this.additionalJson[key] = additionalJson[key];
            }
        })

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
