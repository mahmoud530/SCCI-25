<?php
include './Insert.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../webfonts/">
  <link rel="stylesheet" href="./css/all.min.css"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="./img/SCCI_Logo.png">

  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
    <title>contact us</title>
  </head>
  <body>
  <?php 
  include './nav.php';
  ?>

    <section class="contact position-relative d-flex flex-column align-items-center justify-content-center ">
   <div class="black-layer position-absolute top-0 bottom-0 start-0 end-0"></div>
   </section>


   <section>
    <div class="container"> 
      <div class="section-contentt text-center ">
        <h2 class="pt-5 titlee text-capitalize"> <span>contact info</span></h2>
      </div>
      <div class="row p-4 mt-5 mb-5">
        <div class="col-md-4 d-flex flex-column justify-content-between align-items-center">
          <i class="fa-solid fa-location-dot mb-3 fs-1 font-red" style="color: #c52525;"></i>
          <h5>Address</h5>
          <img src="./img/address02.png" style="height: 20%" >
          <p class="font-p-style mt-2">267 El Dokki street, Giza</p>


        </div>

        <div class="col-md-4 d-flex flex-column justify-content-between align-items-center">
          <i class="fa-solid fa-phone-volume mb-3 fs-1 font-blue" style="color: #c52525;"></i>
          <h5>Call Us</h5>
          <img src="./img/call-us.jpg" style="height: 20%" >
          <p class="font-p-style mt-2">01129351876</p>
        </div>
        
        <div class="col-md-4 d-flex flex-column justify-content-between align-items-center">
          <i class="fa-solid fa-envelope mb-3 fs-1 font-blue" style="color: #c52525;"></i>
          <h5>Email</h5>
          <img src="./img/email.jpg" style="height: 20%" >
          <p class="font-p-style mt-2">SCCI25@gmail.com</p>
        </div>
      </div>
    </div>
    </div>
  </section>




  <?php if (!empty($message)): ?>
        <div id="notification" class="<?php echo $run_insert ? '' : 'error'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?> 

  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="section-contentt text-center ">
        <h2 class="pt-5 titlee text-capitalize"> <span>get in touch</span></h2>
      </div>
      <form id="form" method="post">
        <div class="row mt-5 mb-md-5">


          <div class="mb-3 col-md-4">
            <input type="text" id="uname" name="Name" class="form-control border-0 border-bottom"
              id="exampleFormControlInput1" placeholder="Name">
            <span style="color: red; padding-left: 11px;" id="name_error"></span>
          </div>
  
          <div class="mb-3 col-md-4">
            <input type="email" id="email" name="Email" class="form-control border-0 border-bottom" placeholder="Email">
            <span style="color: red; padding-left: 11px;" id="email_error"></span>
          </div>

          <div class="mb-3 col-md-4">
            
            <input type="number" id="UserWorkshop" name="phone" class="form-control border-0 border-bottom"
              placeholder="Phone number">
            <span style="color: red; padding-left: 11px;" id="subject_error"></span>
          </div>
        </div>
         


        <div class="mb-3">
          <textarea id="message" class="form-control border-0 border-bottom" placeholder="Enter Your Message" rows="7"
            name="Message"></textarea>
            
          <span style="color: red; padding-left: 11px;" id="message_error"></span>
        </div>

          <button type="submit" name="submit" style="    background-color: #00005B;
          color: white;
          position: relative;
          bottom: 20px;
          /* max-width: 143px; */
          width: 25vh;
          left: 5%;
          height: 5vh;
          border-radius: 50px;">Send
            </button>

      </form>
    </div>
  </section>
  <?php 
  include './footer.php';
  ?>
    <script src="./js/contact.js"></script>
    <script src="./js/bootstrap.js"></script>
    
    <style>
#notification {
  display: none; 
  position: fixed;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #4CAF50; 
  color: white;
  padding: 20px 30px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  font-size: 18px;
  font-family: Arial, sans-serif;
  text-align: center;
  z-index: 1000;
}

    </style>
  </body>
</html>
