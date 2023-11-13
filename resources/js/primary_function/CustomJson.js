export class CustomJson {
    jsonsValue;

    setJsonsValue(jsons) {
        this.jsonsValue = jsons;
    }

    getMargeJson() {
        const margeJson = {};

        this.jsonsValue.forEach(item => {
            console.log(item);
            if (item !== {}) {
                Object.keys(item).map(key => (
                    margeJson[key] = item[key]
                ));
            }
        })

        return margeJson;
    }
}
