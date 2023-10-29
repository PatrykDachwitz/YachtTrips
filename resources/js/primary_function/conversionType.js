import { ref } from 'vue';
export function changeJsonToArray(data) {
    const dataNewType = Object.keys(data.value).map(key => ({ [key]: data.value[key] }));

    return dataNewType;
}

export function changeFormDataToJson(formData) {
    let jsonData = {};

    formData.forEach((value, key) => {
        if (value !== "") {
            jsonData[key] = value;
        }

    });

    return JSON.stringify(jsonData);
}
