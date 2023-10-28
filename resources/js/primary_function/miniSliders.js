export class miniSliders {
    containerSlider;
    nameSlider;
    buttonPrevious;
    buttonNext;
    sliderContent;
    firstActiveSlider;
    lastActiveSlider;
    countSliders;

    constructor(nameSlider) {
        this.initSlider(nameSlider);
    }

    //Initiation and download main function and var
    initSlider(nameSlider) {
        this.nameSlider = nameSlider;
        this.buttonPrevious = document.querySelector(`[data-button-previous="${nameSlider}"]`);
        this.buttonNext = document.querySelector(`[data-button-next="${nameSlider}"]`);
        this.sliderContent = document.querySelectorAll(`div[data-slider="${nameSlider}"]`);
        this.firstActiveSlider = 0;
        this.lastActiveSlider = 4;
        this.countSliders = this.sliderContent.length;
        this.containerSlider = document.querySelector(`div[data-slider-container="${nameSlider}"]`);

        this.initButton();
    }
    //Initiation listener for next and previous button
    initButton() {
        this.buttonPrevious.addEventListener("click", () => {
            this.changePreviousBanner();
        });
        this.buttonNext.addEventListener("click", () => {
            this.changeNextBanner();
        });

    }

    //Change class for secondary container
    changeNextClass(position, i) {
        switch (position) {
            case 0:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex');
                this.sliderContent[i].classList.add('d-none');
                break;
            case 1:
                this.sliderContent[i].classList.remove('d-none', 'd-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex');
                this.sliderContent[i].classList.add('d-flex');
                break;
            case 2:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex');
                this.sliderContent[i].classList.add('d-lg-flex');
                break;
            case 3:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex');
                this.sliderContent[i].classList.add('d-xxxl-flex');
                break;
            case 4:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex');
                this.sliderContent[i].classList.add('d-xxxl-flex');
                break;
            case 5:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex');
                this.sliderContent[i].classList.add('d-xxxxl-flex');
                break;
        }
    }
    changePreviousClass(position, i) {
        switch (position) {
            case 0:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex', 'd-none');
                this.sliderContent[i].classList.add('d-flex');//d-none
                break;
            case 1:
                this.sliderContent[i].classList.remove('d-none', 'd-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex', 'd-none');
                this.sliderContent[i].classList.add('d-lg-flex');//d-flex
                break;
            case 2:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex', 'd-none');
                this.sliderContent[i].classList.add('d-xxxl-flex');//'d-lg-flex'
                break;
            case 3:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex', 'd-none');
                this.sliderContent[i].classList.add('d-xxxl-flex');//d-xxxl-flex
                break;
            case 4:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex', 'd-none');
                this.sliderContent[i].classList.add('d-xxxxl-flex');//d-xxxl-flex
                break;
            case 5:
                this.sliderContent[i].classList.remove('d-flex', 'd-lg-flex', 'd-xxxl-flex', 'd-xxxxl-flex', 'd-none');
                this.sliderContent[i].classList.add('d-none');//d-xxxxl-flex
                break;
        }

    }

    //Change position secondary container slider on first or last position in main container
    chargePositionInContainerToNext(position) {
        this.containerSlider.append(this.sliderContent[position]);
    }
    chargePositionInContainerToPrevious(position) {
        this.containerSlider.insertBefore(this.sliderContent[position], this.containerSlider.firstChild);
    }

    //Update number position for var first and last current position
    updateToNextPosition() {
        this.firstActiveSlider += 1;
        this.lastActiveSlider += 1;

        if (this.firstActiveSlider >= this.countSliders) {
            this.firstActiveSlider = 0;
        }

        if (this.lastActiveSlider >= this.countSliders) {
            this.lastActiveSlider = 0;
        }
    }
    updateToPreviousPosition() {
        this.firstActiveSlider -= 1;
        this.lastActiveSlider -= 1;

        if (this.firstActiveSlider < 0) {
            this.firstActiveSlider = this.countSliders - 1;
        }

        if (this.lastActiveSlider < 0) {
            this.lastActiveSlider = this.countSliders - 1;
        }
    }

    //Main function change visibility mini slider for next and previous button
    changeNextBanner() {
        let newActive = this.lastActiveSlider + 1;
        if (newActive >= this.countSliders) {
            newActive = 0;
        }
        let position = 0;

        if (this.lastActiveSlider <= newActive & this.lastActiveSlider > this.firstActiveSlider) {
            for (let i = this.firstActiveSlider; i < this.lastActiveSlider; i++) {
                this.changeNextClass(position, i);
                position += 1;
            }
            this.changeNextClass(position, newActive);

        } else {

            for (let i = this.firstActiveSlider; i < this.countSliders; i++) {
                this.changeNextClass(position, i);
                position += 1;
            }

            for (let i = 0; i <= newActive; i++) {
                this.changeNextClass(position, i);
                position += 1;
            }
        }
        this.chargePositionInContainerToNext(newActive);
        this.updateToNextPosition();
    }

    changePreviousBanner() {

        let newActive = this.firstActiveSlider - 1;

        if (newActive < 0) {
            newActive = this.countSliders - 1;
        }
        let position = 5;


        if ( this.lastActiveSlider > this.firstActiveSlider ) {

            for (let i = this.lastActiveSlider; i > this.firstActiveSlider; i--) {
                this.changePreviousClass(position, i);
                position -= 1;
            }

            this.changePreviousClass(position, newActive);

        } else {

            for (let i = this.lastActiveSlider; i >= 0; i--) {
                this.changePreviousClass(position, i);
                position -= 1;
            }

            for (let i = newActive; i  <= this.countSliders; i++) {
                this.changePreviousClass(position, i);
                position -= 1;
            }
        }

        this.updateToPreviousPosition();
        this.chargePositionInContainerToPrevious(newActive);
    }

}
