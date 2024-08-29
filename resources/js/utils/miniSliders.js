export class miniSliders {
    containerSlider;
    nameSlider;
    buttonPrevious;
    buttonNext;
    sliderContent;
    firstActiveSlider;
    lastActiveSlider;
    countSliders;
    currentNumberFirstElement;
    currentNumberLastElement;
    isPositionElementInParent = false;
    saveCurrentFirstElement;
    saveCurrentSecondElement;

    availableClassNames = [
        'd-flex',
        'd-none',
        'd-md-flex',
        'd-xl-flex',
        'd-xxxl-flex',
        'd-xxxxl-flex',
    ]

    constructor(nameSlider) {
        this.initSlider(nameSlider);
    }

    //Initiation and download main function and var
    initSlider(nameSlider) {
        this.nameSlider = nameSlider;
        this.buttonPrevious = document.querySelector(`[data-button-previous="${nameSlider}"]`);
        this.buttonNext = document.querySelector(`[data-button-next="${nameSlider}"]`);

        this.initSlidersContainer()
        this.initButton();
    }
    //Initiation listener for next and previous button
    initButton() {
        this.buttonPrevious.addEventListener("click", () => {
            this.changeBanner(this.currentNumberFirstElement - 1);
        });
        this.buttonNext.addEventListener("click", () => {
            this.changeBanner(this.currentNumberFirstElement + 1);
        });

    }

    initSlidersContainer() {
        this.sliderContent = document.querySelectorAll(`div[data-slider="${this.nameSlider}"]`);
        this.countSliders = this.sliderContent.length;
        this.containerSlider = document.querySelector(`div[data-slider-container="${this.nameSlider}"]`);

        this.setFirstLastSlider();
    }

    setFirstLastSlider() {
        this.currentNumberFirstElement  = 0;
        this.currentNumberLastElement = this.countSliders - 1;
    }


    getCorrectNumberElement(number) {
        if (number < 0) {
            number = this.countSliders - 1;
        } else if (number >= this.countSliders) {
            number = 0;
        }

        return number;
    }
    segregateByPosition(elements) {
        const response = [];
        elements.forEach( (position, index) => {
            response[position] = index;
        })

        return response;
    }
    relocateElementByPosition(elements) {
        const segregateElements = this.segregateByPosition(elements);

        for (let position = 0; position < this.countSliders; position++) {
            let index = segregateElements[position];
            this.sliderContent[0].parentElement.appendChild(this.sliderContent[index]);
        }
    }
    changeBanner(newFirstElement) {

        this.currentNumberFirstElement = this.getCorrectNumberElement(newFirstElement);
        const positionWithIndex = this.getPositionWithIndexByFirstElementIndex(this.currentNumberFirstElement);

        positionWithIndex.forEach( (position, index) => {
            this.setCorrectClassName(position, index);
        })

        this.relocateElementByPosition(positionWithIndex);
    }

    getPositionWithIndexByFirstElementIndex(firstElement) {
        const response = [];
        for (let position = 0; position < this.countSliders; position++) {

            response[firstElement] = position;
            firstElement++;
            if (firstElement >= this.countSliders) {
                firstElement = 0;
            }
        }

        return response;
    }

    setCorrectClassName(position, numberElement) {
        const elementTarget = this.sliderContent[numberElement];
        this.availableClassNames.forEach(className => {
            elementTarget.classList.remove(className);
        });

        switch (position) {
            case 0:
                elementTarget.classList.add('d-flex');
                break;
            case 1:
                elementTarget.classList.add('d-none', 'd-md-flex');
                break;
            case 2:
                elementTarget.classList.add('d-none', 'd-xl-flex');
                break;
            case 3:
                elementTarget.classList.add('d-none', 'd-xxxl-flex');
                break;
            case 4:
                elementTarget.classList.add('d-none', 'd-xxxxl-flex');
                break;
            default:
                elementTarget.classList.add('d-none');
                break;

        }

    }
}
