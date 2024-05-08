export function getLanguage() {
    const language = document.querySelector('[data-lang]').innerHTML;

    return JSON.parse(language);
}
