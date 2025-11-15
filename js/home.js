
let index = 0;
displayImages();
function displayImages() {
    let i;
    const images = document.getElementsByClassName("image");
    for (i = 0; i < images.length; i++) {
        images[i].style.display = "none";
    }
    index++;
    if (index > images.length) {
        index = 1;
    }
    images[index - 1].style.display = "block";
    setTimeout(displayImages, 2500);
}




window.addEventListener("scroll", reveal);
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var revTop = reveals[i].getBoundingClientRect().top;
        var revPoints = 150;
        if (revTop < windowHeight - revPoints) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}



const header = document.getElementById('bars');
const ul = document.getElementById('lists');
const icon = document.getElementById('list_icon');

icon.addEventListener("click", () => {
    if (header.style.height == "10vh") {
        header.style.height = "50vh";
        header.style.transition = '0.2s';
        document.getElementById('nav').style.height = "20%";
        ul.style.display = "flex";
    }
    else {
        header.style.height = "10vh";
        header.style.transition = '0.2s';
        ul.style.display = "none";
    }
})