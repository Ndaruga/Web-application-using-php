//slider
var slider = document.getElementById("slideImg");

var images = new Array(
    "../Private/Assets/images/aesthetic-winter-landscape-1mbhrurfuvlbakqy.jpg",
    "../Private/Assets/images/bubbles-230014__480.jpg",
    "../Private/Assets/images/milky-way-2695569__480.jpg",
    "../Private/Assets/images/mountain-riverside-during-winter-ub7pi6eo4r4tokb5.jpg",
    "../Private/Assets/images/pexels-photo-2486168.jpeg",
    "../Private/Assets/images/sky-and-winter-mountains-cazoirddldrab8xa.jpg",
    "../Private/Assets/images/stars-2643089__480.jpg",
    "../Private/Assets/images/winter-house-on-snow-21czcthzivnc36yv.jpg"
);

var imageLength = images.length;
var i = 0;

function slideImages(){
    if(i > imageLength-1){
        i = 0;
    }
    slider.src = images[i];
    i++;
    setTimeout('slideImages()', 5000);
}