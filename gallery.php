<?php
include"nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./scci logo.png">
    <title>Gallery</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/gallery.css">    <link rel="stylesheet" href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbEFHdmh1aXJOWHRlUjdUTTNiVnR5NGdvR2ljUXxBQ3Jtc0trM0NldFVadk5HVHRzMzNpOHhuZ0h6TmJFbE50dnRnNk05V29zVmo0Wk5sQTE5YXNINGh1WlFRM1dtWVVLYkJyOE55SWtuRVNZZlhBMlgyczd2WjRYRUhMcGNhX2xFQmR0XzB4Q0t4bHo2R1BMTXdlNA&q=https%3A%2F%2Funpkg.com%2Fionicons%405.4.0%2Fdist%2Fionicons.js&v=CQZxeoQeo5c">

</head>
<body>

    <div class="mainsection">
        <div class="section1">
            <div class="section1upper">
                <div class="content-text">
                    <div class="logo-title">
                        <img src="img/scci logo.png" alt="">
                        <div class="word">Sessions</div>
                    </div>
                    <p class="dark">Photos Are The Best Way To Save The Moments, As Our Sessions Are Always Different,
                        So Their img Are Different Too. They Captured With Love.</p>
                </div>        
                <div class="photos">
                    <img src='img/s1.jpg' alt=''>
                    <img src='img/s2.jpg' alt=''>
                    <img src='img/s3.jpg' alt=''>
                    <img src='img/s4.jpg' alt=''>
                    <img src='img/s5.jpg' alt=''>
                </div>
            </div>
            <div class="popup-image">
                <span>&times;</span>
                <img src='img/s1.jpg' alt=''>
            </div>
            <div class="section1bottom">
               
                <div class="container swiper">
                   <div class="card">
                    <ul class="card-list swiper-wrapper">
                        <li class="card-item swiper-slide">
                            <a href="https://www.facebook.com/share/p/18VbhQM6B9/?mibextid=wwXIfr" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session one</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Two</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Three</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci logo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Four</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Five</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Six</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Seven</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Eight</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci logo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Nine</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="" class="card-link">
                                <img src="img/scci photo.png" alt="card image" class="card-image">
                                <p class="session-number">Session Ten</p>
                                <h2 class="card-title">Seek The Peak</h2>
                            </a>
                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-slide-button swiper-button-prev"></div>
                    <div class="swiper-slide-button swiper-button-next"></div>
                   </div> 
                </div>

            </div>
        </div>
        <div class="section2">
            <div class="section2upper">
                <div class="content-text">
                    <div class="logo-title">
                        <img src="img/scci logo.png" alt="">
                        <div class="word">Events</div>
                    </div>
                    <p class="dark">Life Is Short So We Try To Make It Worth. We Care About Other People Who Really Needs Our Help
                        We Made It With Much Of Joy And Recived Lots Of Kindness.</p>
                </div>
            </div>
            <div class="section2bottom">
                 <div class="img-card active">
                    <img src="img/oppening.jpg" alt="">
                    <label>
                        opening
                        <span>
                            Where the adventure begins.
                        </span>
                    </label>
                 </div>
                 <div class="img-card">
                    <img src="img/charity.jpg" alt="">
                    <label>
                        Charity
                        <span>
                            A small act of Kindness can change a life.
                        </span>
                    </label>
                 </div>
                 <div class="img-card">
                    <img src="img/acedmic.jpg" alt="">
                    <label>
                        ACADEMIC
                        <span>
                            The competition celebrated innovation and entrepreneurial spirit.
                        </span>
                    </label>
                 </div>
                 <div class="img-card">
                    <img src="img/League.jpg" alt="">
                    <label>
                        League
                        <span>
                            The football league unites communities through the love of the sport.
                        </span>
                    </label>
                 </div>
                 <div class="img-card">
                    <img src="img/closing g.jpg" alt="">
                    <label>
                        Closing
                        <span>
                            Closing the season allows us to honor the efforts and accomplishments of <br> everyone involved.
                        </span>
                    </label>
                 </div>
                 
            </div>
        </div>
        <div class="section3">
            <div class="section3upper">
                <div class="content-text">
                    <div class="logo-title">
                        <img src="img/scci logo.png" alt="">
                        <div class="word">Conference</div>
                    </div>
                    <p class="dark">After A Long Training And Sessions We Have Reached The Semifinals Phase.
                        Coneferce Phase Is The Most Important Part Of The Year
                        It's Time For Everyone To Show Their Power.</p>
                </div>
            </div>
            <div class="section3bottom">
                <div class="box">
                    <span style="--i:1"><img src="img/conference.jpg" alt=""></span>
                    <span style="--i:2"><img src="img/c1.jpg" alt=""></span>
                    <span style="--i:3"><img src="img/c2.jpg" alt=""></span>
                    <span style="--i:4"><img src="img/c3.jpg" alt=""></span>
                    <span style="--i:5"><img src="img/c4.jpg" alt=""></span>
                    <span style="--i:6"><img src="img/c5.jpg" alt=""></span>
                    <span style="--i:7"><img src="img/c6.jpg" alt=""></span>
                    <span style="--i:8"><img src="img/c7.jpg" alt=""></span>
                </div>
                <div class="btns">
                    <div class="btn prev"></div>
                    <div class="btn next"></div>
                </div>
            </div>
        </div>
        <div class="section4">
            <div class="section4upper">
                <div class="content-text">
                    <div class="logo-title">
                        <img src="img/scci logo.png" alt="">
                        <div class="word">Closing</div>
                    </div>
                    <p class="dark"> Finally We Reached Our Destiantion After A Long Journey Together, It's Time To Say Goodluck With
                        Your Next
                        Step,
                        As We Don't Say Good Bye. We Are An Amazing Family.
                        Acheiving Your Goal Was Not Easy But It Worth And Together We Did It.</p>
                </div>
            </div>
            <div id="section4" class="section4bottom">

                <div class="container4">
                    <div class="row1">
                        <div class="box">
                            <div class="curtain-wrapper" >
                                <div class="curtain left"></div>
                                <div class="curtain right"></div>
                                <img src="img/closing 2.jpg" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="curtain-wrapper">
                                <div class="curtain left"></div>
                                <div class="curtain right"></div>
                                <img src="img/closing 1.jpg" alt="">

                            </div>
                        </div>                        
                        <div class="box">
                            <div class="curtain-wrapper">
                                <div class="curtain left"></div>
                                <div class="curtain right"></div>
                                <img src="img/closing 3.jpg" alt="">

                            </div>
                        </div>                    
                    </div>
                    <div class="row2">
                        <div class="box">
                            <div class="curtain-wrapper">
                                <div class="curtain left"></div>
                                <div class="curtain right"></div>
                                <img src="img/closing 4.jpg" alt="">

                            </div>
                        </div>
                        <div class="box">
                            <div class="curtain-wrapper">
                                <div class="curtain left"></div>
                                <div class="curtain right"></div>
                                <img src="img/closing g.jpg" alt="">

                            </div>
                        </div>
                        <div class="box">
                            <div class="curtain-wrapper">
                                <div class="curtain left"></div>
                                <div class="curtain right"></div>
                                <img src="img/closing 5.jpg" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
<?php
include"footer.php";
?>




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./js/gallery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- end footer -->
</body>
</html>