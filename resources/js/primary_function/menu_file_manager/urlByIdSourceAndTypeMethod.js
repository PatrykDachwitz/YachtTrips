import {getUrlByDataSetName} from "@/primary_function/useFetch.js";

function getUrlByType(type) {
    let apiFolder = getUrlByDataSetName('data-folder');
    let apiFile = getUrlByDataSetName('data-file');
    switch (type) {
        case "file":
            return apiFile;
            break;
        case "folder":
            return apiFolder;
            break;
    }
}

export function geUrlWithIdSource(id, type) {
    return `${getUrlByType(type)}/${id}`;
}
