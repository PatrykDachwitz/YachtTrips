export function getLangContent() {
    const languageContent = document.querySelector('[data-language]').innerHTML;
    const languageJson = JSON.parse(languageContent);
    return languageJson;
}
