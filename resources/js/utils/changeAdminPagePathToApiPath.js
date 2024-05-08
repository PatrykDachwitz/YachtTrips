export function changeAdminPagePathToApiPath(currentPath) {
    let pathApi = import.meta.env.VITE_API_PATH;
    let pathAdminPage = import.meta.env.VITE_ADMIN_PATH_TO_CHANGE;

    return currentPath.replace(pathAdminPage, pathApi)
}
