export function getLogOutUrl() {
    let pathApi = import.meta.env.VITE_API_PATH;
    return `${pathApi}/logOut`;
}
