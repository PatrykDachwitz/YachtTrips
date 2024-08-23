export function selectOtherOption(content) {
    const contentShow = document.querySelectorAll('div[data-content-show]');
    contentShow.forEach(item => {
        item.classList.remove('d-none');
        item.classList.add('d-none');
    })
    document.querySelector(`div[data-content-show='${content}']`).classList.remove('d-none');
}
