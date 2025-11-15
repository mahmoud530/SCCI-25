
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Workshops</title>
    <link rel="icon" href="./img/SCCI_Logo.png">
    <link rel="stylesheet" href="./css/messagee.css">
</head>
<body>
    <div class="container">
        <p id="live-message"></p>
    
    <button class="animated-button">
  <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
    <path
      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
    ></path>
  </svg>
 <a href="markative.php"> <span class="text"> Continue </span></a> 
  <span class="circle"></span>
  <br>
  <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
    <path
      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
    ></path>
  </svg>
</button>
</div>
<br>

    <script>
         const message ="To Every Member Of Our SCCI Family;\n Your Presence And Passion Means So Much To Us.\n We Can't Wait For The Amazing Contributions You will make. \n With Appreciation and Warmth, Your IT Crew.";
        const transitionTime = 3000;  
        let i = 0;

        function typeMessage() {
            if (i < message.length) {
                document.getElementById("live-message").textContent += message.charAt(i);
                i++;
                setTimeout(typeMessage, 60);  
            } else {
                setTimeout(redirectToNewPage, 1000);  
            }
        }

        function redirectToNewPage() {
            
            window.location.href = "./markative.php";  
        }

        typeMessage();  
    </script>
</body>
</html>

