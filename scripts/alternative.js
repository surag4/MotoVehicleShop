
// filter page PRICE SELECTION
const rangeInput = document.querySelectorAll(".range-inputbox input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".priceslider .price-progress");
let priceGap = 1000;

priceInput.forEach(input => {
    input.addEventListener("input", e => {
        let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

        if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach(input => {
    input.addEventListener("input", e => {
        let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);
        if ((maxVal - minVal) < priceGap) {
            if (e.target.className === "pricerange-min") {
                rangeInput[0].value = maxVal - priceGap
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
        } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});

// property pictures viewer in enquiry page
var PropslideIndex = 1;
showSlides(PropslideIndex);

function propViewerSlides(na) {
    showSlides(PropslideIndex += na);
}

function currentPropViewSlide(na) {
    showSlides(PropslideIndex = na);
}

function showSlides(na) {
    var x;
    var slides = document.getElementsByClassName("prop_picture_cont");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (na > slides.length) { PropslideIndex = 1 }
    if (na < 1) { PropslideIndex = slides.length }
    for (x = 0; x < slides.length; x++) {
        slides[x].style.display = "none";
    }
    for (x = 0; x < dots.length; x++) {
        dots[x].className = dots[x].className.replace("active", "");
    }
    slides[PropslideIndex - 1].style.display = "block";
    dots[PropslideIndex - 1].className += " active";
    captionText.innerHTML = dots[PropslideIndex - 1].alt;
}