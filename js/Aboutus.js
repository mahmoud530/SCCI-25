

window.addEventListener("load", function() {
  // Add the 'curtain-open' class to the body to trigger the animation
  document.body.classList.add("curtain-open");

  // Optional: Remove the curtain elements after the animation is done
  setTimeout(() => {
      const curtains = document.querySelector(".curtain-container");
      if (curtains) {
          curtains.style.display = "none";
      }
  }, 1500); // Matches the duration of the CSS transition
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show'); 
    }
    else{
      entry.target.classList.remove('show');
    }
  });
});

const hiddenElements = document.querySelectorAll('.aim-section');
hiddenElements.forEach((el) => observer.observe(el));


const images = [
  'img/oppening.jpg',
  'img/invst.jpg',
  'img/about2.jpg'
];

let currentIndex = 0;

function changeImage() {
  const tvImage = document.getElementById('tv-image');
  currentIndex = (currentIndex + 1) % images.length; // Loop through images
  tvImage.src = images[currentIndex];
}

// Change image every 3 seconds
setInterval(changeImage, 3000);



const header = document.getElementById('bars');
const ul = document.getElementById('lists');
const icon = document.getElementById('list_icon');

icon.addEventListener("click", () => {
    if (header.style.height == "10vh")
    {
        header.style.height = "50vh";
        header.style.transition = '0.2s';
        document.getElementById('nav').style.height = "20%";
        ul.style.display = "flex";
    }
    else{
        header.style.height = "10vh";
        header.style.transition = '0.2s';
        ul.style.display = "none";
    }
})

