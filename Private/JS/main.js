/** Image slider */
var slider = document.getElementById("slideImg");

var images = new Array(
    "../Private/Assets/images/abstract-2891890__340.jpg",
    "../Private/Assets/images/website-3374825__340.jpg",
    "../Private/Assets/images/images (2).jpeg",
    "../Private/Assets/images/images (3).jpeg",
    "../Private/Assets/images/images.jpeg",
    "../Private/Assets/images/web-1012467__340.jpg",
    "../Private/Assets/images/web-design-2906159__340.jpg",
    "../Private/Assets/images/wordpress-581849_960_720.jpg"
);

var imageLength = images.length;
var i = 0;

function imageSlider(){
    if(i > imageLength-1){
        i = 0;
    }
    slider.src = images[i];
    i++;
    setTimeout('imageSlider()', 5000);
};



const text = ["web designer.","software developer.","Network designer.","freelancer."];   
let count = 0;
let index = 0;
let currentText = "";
let letter = "";

(function dynamicText(){
    if(count === text.length){
        count = 0;
    }
    currentText = text[count];
    letter = currentText.slice(0, ++index);

    document.querySelector(".dynamic_text").textContent = letter;
    if(letter.length === currentText.length){
        count++;
        index = 0;
    }
    setTimeout(dynamicText, 250);
})();

AOS.init();

