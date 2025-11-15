<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Slider</title>
    <link rel="stylesheet" href="./css/event_slider.css">
</head>

<body>



    <main>
        <ul class='slider'>
            <li class='item' style="background-image: url('img/about.jpg')">
                <div class='content'>
                    <h2 class='title'>"Lossless Youths"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    
                </div>
            </li>
            <li class='item' style="background-image: url('img/opening.jpeg')">
                <div class='content'>
                    <h2 class='title'>"Estrange Bond"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    
                </div>
            </li>
            <li class='item' style="background-image: url('img/cinema-background-psrlw0g60cgq94fq.jpg')">
                <div class='content'>
                    <h2 class='title'>"The Gate Keeper"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    
                </div>
            </li>
            <li class='item' style="background-image: url('img/Contact\ us-amico.png')">
                <div class='content'>
                    <h2 class='title'>"Last Trace Of Us"</h2>
                    <p class='description'>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis
                        inventore praesentium nisi. Id laboriosam ipsam enim.
                    </p>
                    
                </div>
            </li>
            <li class='item' style="background-image: url('img/background.png')">
                <div class='content'>
                    <h2 class='title'>"Urban Decay"</h2>
                    <p class='description'>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis
                        inventore praesentium nisi. Id laboriosam ipsam enim.
                    </p>
                    
                </div>
            </li>
            <li class='item' style="background-image: url('img/opening.jpeg')">
                <div class='content'>
                    <h2 class='title'>"The Migration"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    
                </div>
            </li>
        </ul>
        <nav class='nav'>
            <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
            <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
            <a href="home.php">home</a>
        </nav>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        const slider = document.querySelector('.slider');

        function activate(e) {
            const items = document.querySelectorAll('.item');
            e.target.matches('.next') && slider.append(items[0])
            e.target.matches('.prev') && slider.prepend(items[items.length - 1]);
        }

        document.addEventListener('click', activate, false);
    </script>

</body>

</html>