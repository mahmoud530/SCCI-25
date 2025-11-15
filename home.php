<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- link google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <!-- link favicon  -->
    <link rel="shortcut icon" href="img/SCCI_Logo.png" type="image/x-icon">

    <!-- woooo -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">


    <!-- link css file -->
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>


    <!-- navbar -->

    <?php
        include './nav.php'
    ?>

    <div class="container">



        <section class="welcome-section">

            <div class="left-side">
                <div>
                    <h1 class="cssanimation typing sequence">Welcome To <span class="priv">SCCI<span></h1>
                </div>
                <br>
                <p>
                    <span>
                        SCCIians
                    </span>, we're finally starting our year. We're glad you'll be a part of this year's moments,
                    Waiting for you this year.
                </p>
                <a href="#about">
                    <button>
                        See More<i class="fa-solid fa-arrow-right" id="arrow"></i>
                    </button>
                </a>
            </div>

            <div class="right-side">
                <div class="main_wrapper">
                    <a href="home.php">
                        <div class="main">
                            <div class="antenna">
                                <div class="antenna_shadow"></div>
                                <div class="a1"></div>
                                <div class="a1d"></div>
                                <div class="a2"></div>
                                <div class="a2d"></div>
                                <div class="a_base"></div>
                            </div>
                            <div class="tv">
                                <div class="cruve">
                                    <svg xml:space="preserve" viewBox="0 0 189.929 189.929"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                        version="1.1" class="curve_svg">
                                        <path
                                            d="M70.343,70.343c-30.554,30.553-44.806,72.7-39.102,115.635l-29.738,3.951C-5.442,137.659,11.917,86.34,49.129,49.13
                        C86.34,11.918,137.664-5.445,189.928,1.502l-3.95,29.738C143.041,25.54,100.895,39.789,70.343,70.343z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="display_div">
                                    <div class="screen_out">
                                        <div class="screen_out1">
                                            <div class="screen">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lines">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div class="line3"></div>
                                </div>
                                <div class="buttons_div">
                                    <div class="b1">
                                        <div></div>
                                    </div>
                                    <div class="b2"></div>
                                    <div class="speakers">
                                        <div class="g1">
                                            <div class="g11"></div>
                                            <div class="g12"></div>
                                            <div class="g13"></div>
                                        </div>
                                        <div class="g"></div>
                                        <div class="g"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="base1"></div>
                                <div class="base2"></div>
                                <div class="base3"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>


    </div>

    <!-- end first section -->






    <!-- events slider section -->


    <div class="title">
        <h1>
            Our Events
        </h1>
    </div>



    <div class="container">



        <section class="about-section reveal">

            <div class="left-side">
                <p>
                    Discover unforgettable experiences at our events! Whether you’re looking for lively festivals,
                    intimate
                    gatherings, or corporate functions, our calendar is packed with diverse events tailored for every
                    taste.
                    Join us to celebrate, network, and create lasting memories in a vibrant setting where every detail
                    is
                    crafted to deliver an exceptional experience. Check back regularly for updates and make sure to
                    reserve
                    your spot – we can’t wait to welcome you!
                </p>
                <a href="event_slider.php">
                    <button class="button">
                        <span class="text">Show More</span>
                        <span class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="20" viewBox="0 0 38 15"
                                fill="none">
                                <path fill="white"
                                    d="M10 7.519l-.939-.344h0l.939.344zm14.386-1.205l-.981-.192.981.192zm1.276 5.509l.537.843.148-.094.107-.139-.792-.611zm4.819-4.304l-.385-.923h0l.385.923zm7.227.707a1 1 0 0 0 0-1.414L31.343.448a1 1 0 0 0-1.414 0 1 1 0 0 0 0 1.414l5.657 5.657-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM1 7.519l.554.833.029-.019.094-.061.361-.23 1.277-.77c1.054-.609 2.397-1.32 3.629-1.787.617-.234 1.17-.392 1.623-.455.477-.066.707-.008.788.034.025.013.031.021.039.034a.56.56 0 0 1 .058.235c.029.327-.047.906-.39 1.842l1.878.689c.383-1.044.571-1.949.505-2.705-.072-.815-.45-1.493-1.16-1.865-.627-.329-1.358-.332-1.993-.244-.659.092-1.367.305-2.056.566-1.381.523-2.833 1.297-3.921 1.925l-1.341.808-.385.245-.104.068-.028.018c-.011.007-.011.007.543.84zm8.061-.344c-.198.54-.328 1.038-.36 1.484-.032.441.024.94.325 1.364.319.45.786.64 1.21.697.403.054.824-.001 1.21-.09.775-.179 1.694-.566 2.633-1.014l3.023-1.554c2.115-1.122 4.107-2.168 5.476-2.524.329-.086.573-.117.742-.115s.195.038.161.014c-.15-.105.085-.139-.076.685l1.963.384c.192-.98.152-2.083-.74-2.707-.405-.283-.868-.37-1.28-.376s-.849.069-1.274.179c-1.65.43-3.888 1.621-5.909 2.693l-2.948 1.517c-.92.439-1.673.743-2.221.87-.276.064-.429.065-.492.057-.043-.006.066.003.155.127.07.099.024.131.038-.063.014-.187.078-.49.243-.94l-1.878-.689zm14.343-1.053c-.361 1.844-.474 3.185-.413 4.161.059.95.294 1.72.811 2.215.567.544 1.242.546 1.664.459a2.34 2.34 0 0 0 .502-.167l.15-.076.049-.028.018-.011c.013-.008.013-.008-.524-.852l-.536-.844.019-.012c-.038.018-.064.027-.084.032-.037.008.053-.013.125.056.021.02-.151-.135-.198-.895-.046-.734.034-1.887.38-3.652l-1.963-.384zm2.257 5.701l.791.611.024-.031.08-.101.311-.377 1.093-1.213c.922-.954 2.005-1.894 2.904-2.27l-.771-1.846c-1.31.547-2.637 1.758-3.572 2.725l-1.184 1.314-.341.414-.093.117-.025.032c-.01.013-.01.013.781.624zm5.204-3.381c.989-.413 1.791-.42 2.697-.307.871.108 2.083.385 3.437.385v-2c-1.197 0-2.041-.226-3.19-.369-1.114-.139-2.297-.146-3.715.447l.771 1.846z">
                                </path>
                            </svg>
                        </span>
                    </button>

                </a>
            </div>

            <div class="right-side">
                <img src="img/about.jpg" alt="">
            </div>
        </section>


    </div>




    <!-- end events section -->





    <!-- about us section -->

    <div class="title" id="about">
        <h1>
            About Us
        </h1>
    </div>



    <div class="container">



        <section class="about-section reveal">

            <div class="left-side">
                <p>
                    <span>
                        SCCI
                    </span>is an abbreviattion for Student's Conference for Communication and Information, which helps
                    you in bringing the gap between the technical life and the practical life in the market place. You
                    can know more about our organization right here.
                </p>
                <a href="#">
                    <button class="button">
                        <span class="text">Learn More</span>
                        <span class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="20" viewBox="0 0 38 15"
                                fill="none">
                                <path fill="white"
                                    d="M10 7.519l-.939-.344h0l.939.344zm14.386-1.205l-.981-.192.981.192zm1.276 5.509l.537.843.148-.094.107-.139-.792-.611zm4.819-4.304l-.385-.923h0l.385.923zm7.227.707a1 1 0 0 0 0-1.414L31.343.448a1 1 0 0 0-1.414 0 1 1 0 0 0 0 1.414l5.657 5.657-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM1 7.519l.554.833.029-.019.094-.061.361-.23 1.277-.77c1.054-.609 2.397-1.32 3.629-1.787.617-.234 1.17-.392 1.623-.455.477-.066.707-.008.788.034.025.013.031.021.039.034a.56.56 0 0 1 .058.235c.029.327-.047.906-.39 1.842l1.878.689c.383-1.044.571-1.949.505-2.705-.072-.815-.45-1.493-1.16-1.865-.627-.329-1.358-.332-1.993-.244-.659.092-1.367.305-2.056.566-1.381.523-2.833 1.297-3.921 1.925l-1.341.808-.385.245-.104.068-.028.018c-.011.007-.011.007.543.84zm8.061-.344c-.198.54-.328 1.038-.36 1.484-.032.441.024.94.325 1.364.319.45.786.64 1.21.697.403.054.824-.001 1.21-.09.775-.179 1.694-.566 2.633-1.014l3.023-1.554c2.115-1.122 4.107-2.168 5.476-2.524.329-.086.573-.117.742-.115s.195.038.161.014c-.15-.105.085-.139-.076.685l1.963.384c.192-.98.152-2.083-.74-2.707-.405-.283-.868-.37-1.28-.376s-.849.069-1.274.179c-1.65.43-3.888 1.621-5.909 2.693l-2.948 1.517c-.92.439-1.673.743-2.221.87-.276.064-.429.065-.492.057-.043-.006.066.003.155.127.07.099.024.131.038-.063.014-.187.078-.49.243-.94l-1.878-.689zm14.343-1.053c-.361 1.844-.474 3.185-.413 4.161.059.95.294 1.72.811 2.215.567.544 1.242.546 1.664.459a2.34 2.34 0 0 0 .502-.167l.15-.076.049-.028.018-.011c.013-.008.013-.008-.524-.852l-.536-.844.019-.012c-.038.018-.064.027-.084.032-.037.008.053-.013.125.056.021.02-.151-.135-.198-.895-.046-.734.034-1.887.38-3.652l-1.963-.384zm2.257 5.701l.791.611.024-.031.08-.101.311-.377 1.093-1.213c.922-.954 2.005-1.894 2.904-2.27l-.771-1.846c-1.31.547-2.637 1.758-3.572 2.725l-1.184 1.314-.341.414-.093.117-.025.032c-.01.013-.01.013.781.624zm5.204-3.381c.989-.413 1.791-.42 2.697-.307.871.108 2.083.385 3.437.385v-2c-1.197 0-2.041-.226-3.19-.369-1.114-.139-2.297-.146-3.715.447l.771 1.846z">
                                </path>
                            </svg>
                        </span>
                    </button>

                </a>
            </div>

            <div class="right-side">
                <img src="img/about.jpg" alt="">
            </div>
        </section>


    </div>

    <!-- end about us section -->






    <!-- workshops & crews -->


    <div class="container">

        <div class="card-contianer reveal">



            <!-- our crew tv -->
            <div class="card">
                <div class="tv">
                    <div class="antenna-container">
                        <div class="antenna"></div>
                    </div>
                    <div class="television-container">
                        <div class="television">
                            <div class="television-inner">
                                <div class="television-screen-container">
                                    <div class="television-crt">
                                        <div class="television-screen">
                                            <div class="off"></div>
                                            <div class="logo-container">
                                                <div class="text"> Our Crew </div>
                                            </div>
                                            <div class="noise"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="television-lateral">
                                    <div class="dial-container">
                                        <div class="dial channel-button" style="--value: 0deg;">
                                            <div class="data-container">
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                            </div>
                                            <div class="dial-core"></div>
                                            <div class="selector"></div>
                                        </div>
                                        <div class="dial volume-button" style="--value: 0deg;">
                                            <div class="data-container">
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                            </div>
                                            <div class="dial-core"></div>
                                            <div class="selector"></div>
                                        </div>
                                    </div>

                                    <div class="speaker-container">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>

                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="button-container">
                                        <div class="button"></div>
                                    </div>
                                    <div class="button-container">
                                        <div class="button"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="television-base">
                            <div class="slots">
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                            </div>
                            <div class="slots">
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                            </div>
                        </div>
                        <div class="foot-container">
                            <div class="foot left"></div>
                            <div class="foot right"></div>
                        </div>
                    </div>
                    <div class="side-bar left">
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                    </div>

                    <!-- Devology brief content -->
                    <div class="content">
                        Want to know who runs this place? Who works hard for it? We have the best members of all time
                        ready to do whatever it takes to raise this place high enough to reach all of your expectations
                        <br>

                        <a href="#" class="btn"> Learn More</a>
                    </div>
                    <div class="side-bar right">
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                    </div>
                </div>
            </div>



            <!-- our workshops tv -->
            <div class="card">
                <div class="tv">
                    <div class="antenna-container">
                        <div class="antenna"></div>
                    </div>
                    <div class="television-container">
                        <div class="television">
                            <div class="television-inner">
                                <div class="television-screen-container">
                                    <div class="television-crt">
                                        <div class="television-screen">
                                            <div class="off"></div>
                                            <div class="logo-container">
                                                <div class="text"> Our Workshops </div>
                                            </div>
                                            <div class="noise"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="television-lateral">
                                    <div class="dial-container">
                                        <div class="dial channel-button" style="--value: 0deg;">
                                            <div class="data-container">
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                            </div>
                                            <div class="dial-core"></div>
                                            <div class="selector"></div>
                                        </div>
                                        <div class="dial volume-button" style="--value: 0deg;">
                                            <div class="data-container">
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                                <div class="data">#</div>
                                            </div>
                                            <div class="dial-core"></div>
                                            <div class="selector"></div>
                                        </div>
                                    </div>

                                    <div class="speaker-container">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>

                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="button-container">
                                        <div class="button"></div>
                                    </div>
                                    <div class="button-container">
                                        <div class="button"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="television-base">
                            <div class="slots">
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                            </div>
                            <div class="slots">
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                                <div class="slot"></div>
                            </div>
                        </div>
                        <div class="foot-container">
                            <div class="foot left"></div>
                            <div class="foot right"></div>
                        </div>
                    </div>
                    <div class="side-bar left">
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                    </div>

                    <!-- Devology brief content -->
                    <div class="content">
                        We provide workshops that will make you gain the best technical and soft skills knowledge of the
                        field that you choose, that will help you find a place among others in the outside competitive
                        job market.
                        <br>

                        <a href="#" class="btn"> Learn More</a>
                    </div>
                    <div class="side-bar right">
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                        <div class="hole"></div>
                    </div>
                </div>
            </div>



        </div>
        <!-- end workshops & crews -->

        <!-- our sponsers -->




        <section class="sponser-section reveal">



            <div class="sponser-title">
                <h1>
                    Our Sponsers
                </h1>
            </div>


            <div class="cardd-contianer">
                <div class="card-sponser">
                    <div class="tv">
                        <div class="antenna-container">
                            <div class="antenna"></div>
                        </div>
                        <div class="television-container">
                            <div class="television">
                                <div class="television-inner">
                                    <div class="television-screen-container">
                                        <div class="television-crt">
                                            <div class="television-screenn">
                                                <div class="off"></div>
                                                <div class="sponserSlider">
                                                    <div class="image fade">
                                                        <img src="img/sp1.png" alt="sp1" />
                                                    </div>
                                                    <div class="image fade">
                                                        <img src="img/sp2.png" alt="sp2" />
                                                    </div>
                                                    <div class="image fade">
                                                        <img src="img/sp3.png" alt="sp3" />
                                                    </div>
                                                    <div class="image fade">
                                                        <img src="img/sp4.png" alt="sp4" />
                                                    </div>
                                                    <div class="image fade">
                                                        <img src="img/sp5.png" alt="sp5" />
                                                    </div>
                                                </div>
                                                <div class="noise"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="television-lateral">
                                        <div class="dial-container">
                                            <div class="dial channel-button" style="--value: 0deg;">
                                                <div class="data-container">
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                </div>
                                                <div class="dial-core"></div>
                                                <div class="selector"></div>
                                            </div>
                                            <div class="dial volume-button" style="--value: 0deg;">
                                                <div class="data-container">
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                    <div class="data">#</div>
                                                </div>
                                                <div class="dial-core"></div>
                                                <div class="selector"></div>
                                            </div>
                                        </div>

                                        <div class="speaker-container">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>

                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div class="button-container">
                                            <div class="button"></div>
                                        </div>
                                        <div class="button-container">
                                            <div class="button"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="television-base">
                                <div class="slots">
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                </div>
                                <div class="slots">
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                    <div class="slot"></div>
                                </div>
                            </div>
                            <div class="foot-container">
                                <div class="foot left"></div>
                                <div class="foot right"></div>
                            </div>
                        </div>
                        <div class="side-bar left">
                            <div class="hole"></div>
                            <div class="hole"></div>
                            <div class="hole"></div>
                            <div class="hole"></div>
                            <div class="hole"></div>
                        </div>

                        <!-- Devology brief content -->

                        <div class="side-bar right">
                            <div class="hole"></div>
                            <div class="hole"></div>
                            <div class="hole"></div>
                            <div class="hole"></div>
                            <div class="hole"></div>
                        </div>
                    </div>
                </div>

            </div>



        </section>

        <!-- our sponsers -->


    </div>



    <!-- contact us section -->



    <div class="title">
        <h1>
            Contact Us
        </h1>
    </div>


    <div class="container">



        <section class="about-section reveal">

            <div class="left-side">
                <h1>
                    Keep In Touch
                </h1>
                <p>
                    If you want to contact us for any queries, or for any sponsorship deals, don't hesitate to contact
                    us right here.
                </p>
                <a href="#">
                    <button class="button">
                        <span class="text">Learn More</span>
                        <span class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="20" viewBox="0 0 38 15"
                                fill="none">
                                <path fill="white"
                                    d="M10 7.519l-.939-.344h0l.939.344zm14.386-1.205l-.981-.192.981.192zm1.276 5.509l.537.843.148-.094.107-.139-.792-.611zm4.819-4.304l-.385-.923h0l.385.923zm7.227.707a1 1 0 0 0 0-1.414L31.343.448a1 1 0 0 0-1.414 0 1 1 0 0 0 0 1.414l5.657 5.657-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM1 7.519l.554.833.029-.019.094-.061.361-.23 1.277-.77c1.054-.609 2.397-1.32 3.629-1.787.617-.234 1.17-.392 1.623-.455.477-.066.707-.008.788.034.025.013.031.021.039.034a.56.56 0 0 1 .058.235c.029.327-.047.906-.39 1.842l1.878.689c.383-1.044.571-1.949.505-2.705-.072-.815-.45-1.493-1.16-1.865-.627-.329-1.358-.332-1.993-.244-.659.092-1.367.305-2.056.566-1.381.523-2.833 1.297-3.921 1.925l-1.341.808-.385.245-.104.068-.028.018c-.011.007-.011.007.543.84zm8.061-.344c-.198.54-.328 1.038-.36 1.484-.032.441.024.94.325 1.364.319.45.786.64 1.21.697.403.054.824-.001 1.21-.09.775-.179 1.694-.566 2.633-1.014l3.023-1.554c2.115-1.122 4.107-2.168 5.476-2.524.329-.086.573-.117.742-.115s.195.038.161.014c-.15-.105.085-.139-.076.685l1.963.384c.192-.98.152-2.083-.74-2.707-.405-.283-.868-.37-1.28-.376s-.849.069-1.274.179c-1.65.43-3.888 1.621-5.909 2.693l-2.948 1.517c-.92.439-1.673.743-2.221.87-.276.064-.429.065-.492.057-.043-.006.066.003.155.127.07.099.024.131.038-.063.014-.187.078-.49.243-.94l-1.878-.689zm14.343-1.053c-.361 1.844-.474 3.185-.413 4.161.059.95.294 1.72.811 2.215.567.544 1.242.546 1.664.459a2.34 2.34 0 0 0 .502-.167l.15-.076.049-.028.018-.011c.013-.008.013-.008-.524-.852l-.536-.844.019-.012c-.038.018-.064.027-.084.032-.037.008.053-.013.125.056.021.02-.151-.135-.198-.895-.046-.734.034-1.887.38-3.652l-1.963-.384zm2.257 5.701l.791.611.024-.031.08-.101.311-.377 1.093-1.213c.922-.954 2.005-1.894 2.904-2.27l-.771-1.846c-1.31.547-2.637 1.758-3.572 2.725l-1.184 1.314-.341.414-.093.117-.025.032c-.01.013-.01.013.781.624zm5.204-3.381c.989-.413 1.791-.42 2.697-.307.871.108 2.083.385 3.437.385v-2c-1.197 0-2.041-.226-3.19-.369-1.114-.139-2.297-.146-3.715.447l.771 1.846z">
                                </path>
                            </svg>
                        </span>
                    </button>

                </a>
            </div>

            <div class="right-side-contact">
                <img src="img/Contact us-amico.png" alt="" class="sponser-image">
            </div>
        </section>


    </div>

    <?php
    include './footer.php';
    ?>
    <!-- link bootstrap js -->



    <!-- link js file -->
    <script src="js/home.js"></script>
    <script src="js/dark.js"></script>

</body>

</html>
