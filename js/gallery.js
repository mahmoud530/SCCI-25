// const header = document.getElementById('bars');
// const ul = document.getElementById('lists');
// const icon = document.getElementById('list_icon');

// // icon.addEventListener("click", () => {
// //     if (header.style.height == "10vh")
// //     {
// //         header.style.height = "50vh";
// //         header.style.transition = '0.2s';
// //         document.getElementById('nav').style.height = "20%";
// //         ul.style.display = "flex";
// //     }
// //     else{
// //         header.style.height = "10vh";
// //         header.style.transition = '0.2s';
// //         ul.style.display = "none";
// //     }
// // })

document.querySelectorAll('.photos img').forEach(image =>{
    image.onclick = () =>{
        document.querySelector('.popup-image').style.display ='block';
        document.querySelector('.popup-image img').src = image.getAttribute('src');
    }
});  
document.querySelector('.popup-image span').onclick= () =>{
    document.querySelector('.popup-image').style.display ='none';
}



new Swiper('.card', {
    loop: true,                      
    spaceBetween: 10,                

    
    pagination: {
      el: '.swiper-pagination',
      clickable: true,             
      dynamicBullets: true,  
    },

    // Enable navigation arrow
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Adjust slidesPerView based on screen width for optimal display
    breakpoints: {
        0: {
            slidesPerView: 1         // Show 1 image at a time on small screens
        },
        768: {
            slidesPerView: 2         // Show 2 images at a time on medium screens
        },
        1024: {
            slidesPerView: 3         // Show 3 images at a time on larger screens
        },
        1400: {
            slidesPerView: 4         // Show 4 images for even larger screens
        }
    }
});



document.addEventListener("DOMContentLoaded", () => {
    // Select all elements with the class .word inside .logo-title in both sections
    const wordElements = document.querySelectorAll(".logo-title .word");

    wordElements.forEach(wordElement => {
        // Split the text content into individual letters and wrap each in a span
        const letters = wordElement.textContent.split("");
        wordElement.textContent = ""; // Clear the original text

        letters.forEach((letter) => {
            const span = document.createElement("span");
            span.textContent = letter;
            span.className = "letter out"; // Initially set letters to the "out" state
            wordElement.append(span);
        });

        const letterElements = wordElement.querySelectorAll(".letter");

        // Animation function for each word
        const animateText = () => {
            // Animate letters out of view
            letterElements.forEach((letter, i) => {
                setTimeout(() => {
                    letter.classList.replace("in", "out"); // Move letters up and out
                }, i * 80);
            });

            // Animate letters into view
            setTimeout(() => {
                letterElements.forEach((letter, i) => {
                    setTimeout(() => {
                        letter.classList.replace("out", "in"); // Move letters down and in
                    }, i * 80);
                });
            }, 800);
        };

        // Initial animation and set interval for repeating animation
        animateText();
        setInterval(animateText, 4000); // Run the animation every 4 seconds
    });
});

imgCard=document.querySelectorAll(".img-card");

imgCard.forEach(element => {
    element.addEventListener("mouseenter",function(e){
        imgCard.forEach(el=>{
            el.classList.remove("active");
        });

        element.classList.add("active");
    })
});


let prev = document.querySelector('.prev');
let next = document.querySelector('.next');
let box = document.querySelector('.box');

let degrees = 0;

prev.addEventListener('click', function() {
    degrees += 45;
    box.style.transform = `perspective(1000px) rotateY(${degrees}deg)`; // Fixed this line
});

next.addEventListener('click', function() {
    degrees -= 45; // Decrease degrees to rotate in the opposite direction
    box.style.transform = `perspective(1000px) rotateY(${degrees}deg)`; // Fixed this line
});



const container = document.querySelector('.section1upper');
const imageContainer = document.querySelector('.image4container');

// Clone the images inside the container
const images = imageContainer.querySelectorAll('.scrolling-image');
images.forEach(image => {
    const clonedImage = image.cloneNode(true); // Clone each image
    imageContainer.appendChild(clonedImage);  // Append the cloned image to the container
});

// Set scroll speed and interval
const scrollSpeed = 1; // Adjust speed as needed

// Start the scrolling effect
function startScrolling() {
    container.scrollLeft += scrollSpeed;

    // Reset to the beginning when the first set of images is completely scrolled out of view
    if (container.scrollLeft >= imageContainer.scrollWidth / 2) { 
        container.scrollLeft = 0; // Start from the beginning once we've scrolled half the images
    }
}

// Begin the scroll loop
let scrollInterval = setInterval(startScrolling, 20);

// Pause scrolling on hover
container.addEventListener('mouseenter', () => clearInterval(scrollInterval));
container.addEventListener('mouseleave', () => {
    scrollInterval = setInterval(startScrolling, 20);
});










// Select the curtains
const leftCurtain = document.querySelector('.curtain.left');
const rightCurtain = document.querySelector('.curtain.right');
const curtainWrapper = document.querySelector('.curtain-wrapper');

// Add click event to the wrapper
curtainWrapper.addEventListener('click', () => {
    // Move each curtain off-screen on click
    leftCurtain.style.transform = 'translateX(-100%)'; // Move left curtain off to the left
    rightCurtain.style.transform = 'translateX(100%)'; // Move right curtain off to the right
});



document.querySelectorAll('.open-curtain').forEach(button => {
    button.addEventListener('click', function () {
        console.log('Button clicked!');
      // Find the closest curtain-wrapper
      const curtainWrapper = this.closest('.curtain-wrapper');
      const leftCurtain = curtainWrapper.querySelector('.curtain.left');
      const rightCurtain = curtainWrapper.querySelector('.curtain.right');
      
      // Toggle the curtains' open/close state
      if (leftCurtain.style.transform === 'translateX(-100%)') {
        // If already open, close the curtains
        leftCurtain.style.transform = 'translateX(0)';
        rightCurtain.style.transform = 'translateX(0)';
      } else {
        // If closed, open the curtains
        leftCurtain.style.transform = 'translateX(-100%)';
        rightCurtain.style.transform = 'translateX(100%)';
      }
    });
  });










  
  
  

  
  



















