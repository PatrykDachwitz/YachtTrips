export function getLangContent() {
    const languageContent = document.querySelector('[data-language]').innerHTML;
    const languageJson = JSON.parse(languageContent);
    return languageJson;
}

export function getMessageErrorByCode(code) {
    const lang = getLangContent();
    if (lang.errors_status[code] !== undefined) {
        return lang.errors_status[code];
    } else {
        if (code < 200) {
            return lang.errors_status[100];
        } else if (code >= 200 && code < 300) {
            return lang.errors_status[200];
        } else if (code >= 300 && code < 400) {
            return lang.errors_status[300];
        } else if (code >= 400 && code < 500) {
            return lang.errors_status[400];
        } else {
            return lang.errors_status[500];
        }
    }
}
