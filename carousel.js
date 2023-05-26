
let cusId = 0;
class calimatic__Custom__Carousl {
    slidePx = 0;
    currentPosition = 0;


    NextSlide(that, b) {
        
        let inner = that.parentElement.firstElementChild;
        if (this.currentPosition < inner.childElementCount - 1) {
            this.slidePx += (b * -1)
            inner.style.transform = `translateX(${this.slidePx}px)`
            this.currentPosition++
            this.currentPosition == inner.childElementCount - 1 ? that.classList.add('disable-button') : that.classList.remove('disable-button');
            this.currentPosition != 0 ? that.previousElementSibling.classList.remove('disable-button') : that.classList.remove('disable-button');
        }
        else {
            this.slidePx = 0;
            this.currentPosition = 0;
            inner.style.transform = `translateX(${this.slidePx}px)`;
            this.currentPosition++;
            this.currentPosition == (inner.childElementCount - 1) ? that.classList.remove('disable-button') : that.classList.remove('disable-button');
            this.currentPosition != 0 ? that.previousElementSibling.style.display = '' : that.classList.add('disable-button');
        }
    }

    PrevSlide(that, b) {
        let inner = that.parentElement.firstElementChild;
        if (this.currentPosition > 0 && this.slidePx < 0) {
            this.slidePx += (b * 1)
            inner.style.transform = `translateX(${this.slidePx}px)`
            this.currentPosition--
            this.currentPosition == 0 ? that.classList.add('disable-button') : that.classList.remove('disable-button');
            this.currentPosition != inner.childElementCount ? that.nextElementSibling.classList.remove('disable-button')  : that.classList.remove('disable-button');
        }

    }
}

let carouselPipeLine = []
let carouselObjPipeLine = []

function PrevSlide(that) {
        let slideWidth = that.parentElement.offsetWidth;

    if (!that.parentElement.hasAttribute('customIndex')) {
        let allCarousel = document.getElementsByClassName('Custom__Carousel____Container___051');
        for (let i = 0; i < allCarousel.length; i++) {

            cusId = cusId + 1
            allCarousel[i].setAttribute('customIndex', `custom${i}${cusId}`)
        }
    }
    if (!carouselPipeLine.includes(that.parentElement.getAttribute('customIndex'))) {

        let obj = that.parentElement.getAttribute('customIndex');
        carouselPipeLine.push(obj);
        obj = new calimatic__Custom__Carousl()
        carouselObjPipeLine.push(obj);
        obj.PrevSlide(that, slideWidth)
    }
    else {
        let MyIndex = carouselPipeLine.indexOf(that.parentElement.getAttribute('customIndex'));
        let obj = carouselObjPipeLine[MyIndex];
        obj.PrevSlide(that, slideWidth)
    }
}

function NextSlide(that) {
    
    let    slideWidth = that.parentElement.offsetWidth;
    
    if (!that.parentElement.hasAttribute('customIndex')) {
        let allCarousel = document.getElementsByClassName('Custom__Carousel____Container___051');
        for (let i = 0; i < allCarousel.length; i++) {
            cusId = cusId + 1
            allCarousel[i].setAttribute('customIndex', `custom${i}${cusId}`)

        }
    }
    if (!carouselPipeLine.includes(that.parentElement.getAttribute('customIndex'))) {
        let obj = that.parentElement.getAttribute('customIndex');
        carouselPipeLine.push(obj);
        obj = new calimatic__Custom__Carousl()
        carouselObjPipeLine.push(obj);
        obj.NextSlide(that, slideWidth)

    }
    else {
        let MyIndex = carouselPipeLine.indexOf(that.parentElement.getAttribute('customIndex'));
        let obj = carouselObjPipeLine[MyIndex];
        obj.NextSlide(that, slideWidth)
    }
}
