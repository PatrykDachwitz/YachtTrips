export class sliders {

    imageContainers;
    contentContainers;
    countVariableContainer;
    buttonPrevious;
    buttonNext;
    currentVariable = 0;
    nameSliders;

    constructor(nameSlider) {
        this.nameSliders = nameSlider;
        this.init()
    }

    getContainer() {

        this.imageContainers = document.querySelectorAll(`div[data-image-slider='${this.nameSliders}']`);
        this.contentContainers = document.querySelectorAll(`div[data-content-slider='${this.nameSliders}']`);

        this.countVariableContainer = this.contentContainers.length - 1;
    }


    getButtons() {
        this.buttonPrevious = document.querySelector(`button[data-button-slider='${this.nameSliders}'][data-button="previous"]`);
        this.buttonNext = document.querySelector(`button[data-button-slider='${this.nameSliders}'][data-button="next"]`);
    }

    verificationAvailablePosition(newPosition) {
        if (newPosition < 0) {
            newPosition = this.countVariableContainer;
        } else if (newPosition > this.countVariableContainer) {
            newPosition = 0;
        }

        return newPosition;
    }

    displayOffCurrentActiveSlider() {
        this.imageContainers[this.currentVariable].classList.add('d-none');
        this.contentContainers[this.currentVariable].classList.add('d-none');
    }

    showVariableSlider(newPosition) {
        this.currentVariable = newPosition;
        this.imageContainers[this.currentVariable].classList.remove('d-none');
        this.contentContainers[this.currentVariable].classList.remove('d-none');
    }
    changeActiveVariableSlider(newPosition) {
        newPosition = this.verificationAvailablePosition(newPosition);
        this.displayOffCurrentActiveSlider();
        this.showVariableSlider(newPosition);
    }

    runButtons() {
        this.buttonPrevious.addEventListener('click', e => {
            this.changeActiveVariableSlider(this.currentVariable - 1);
        });

        this.buttonNext.addEventListener('click', e => {
            this.changeActiveVariableSlider(this.currentVariable + 1);
        });

    }

    init() {
        this.getContainer();
        this.getButtons();
        this.runButtons();
    }

}
