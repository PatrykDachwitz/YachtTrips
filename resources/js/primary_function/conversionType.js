import {ref, vModelRadio} from 'vue';
export function changeJsonToArray(data) {

    const dataNewType = Object.keys(data.value).map(key => ({ [key]: data.value[key] }));

    return dataNewType;
}

function convertDomToArray(domObject, selectInput = false) {
    let items = [];

    if (selectInput == false) {
        try {
            if (domObject.length < 1) return items;
        } catch (e) {
            return items;
        }

        domObject.forEach(item => {
            items.push(item.value);
        })
    } else {
        domObject.forEach(item => {
            items.push(getValueInSelected(item));
        })
    }

    return items;
}

function getValueInSelected(selectedDom) {
    const selectOption = selectedDom.selectedIndex;

    return selectedDom.options[selectOption].value;
}
export function changeFormDataToJson(formData, additionalImagesId = null, additionalImagesDevice = null) {
    let imagesId = convertDomToArray(additionalImagesId)
    let imagesDevice = convertDomToArray(additionalImagesDevice, true);
    let jsonData = {
        "id": imagesId,
        "device": imagesDevice,
    }

    formData.forEach((value, key) => {
        if (value !== "") {
            jsonData[key] = value;
        }

    });

    return JSON.stringify(jsonData);
}
