import {getMessageErrorByCode} from "@/primary_function/language.js";

function getSvgImage(status) {
    if (status < 200) {
        return '<svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="30" height="30"><use xlink:href="#info-fill"/></svg>';
    } else if (status >= 200 && status < 400) {
        return '<svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="30" height="30"><use xlink:href="#check-circle-fill"/></svg>';
    } else if (status >= 400) {
        return '<svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="30" height="30"><use xlink:href="#exclamation-triangle-fill"/></svg>';
    }
}
function getClassMainContainer(status) {
    if (status < 200) {
        return "alert-primary";
    } else if (status >= 200 && status < 400) {
        return "alert-success";
    } else if (status >= 400) {
        return "alert-danger";
    }
}

function getContainer(status) {
    const msg = getMessageErrorByCode(status);
    const mainClassAlert = getClassMainContainer(status);
    const mainContainer = document.createElement('div');
    mainContainer.innerHTML = getSvgImage(status);
    mainContainer.classList.add('alert', mainClassAlert, "d-flex", "align-items-center");
    mainContainer.role = 'alert';

    const msgContainer = document.createElement('div');
    msgContainer.innerText = msg;

    mainContainer.append(msgContainer);

    return mainContainer;
}

export function addAlert(status) {
    if (status === null) status = 500;
    const alertsContainer = document.querySelector('div[data-errors-alerts]');
    if (alertsContainer === null) return false;
    const alert = getContainer(status);

    alertsContainer.appendChild(alert);

     setTimeout(() => {
         alert.parentElement.removeChild(alert);
     }, 5000);
}
