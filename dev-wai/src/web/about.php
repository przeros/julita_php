<?php session_start();
  include_once 'functions.php';
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0" />
    <title>Swimmig</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" />
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="img/logo.png" alt="Logo" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="">SWIMMERS</a>
                        <ul>
                            <li><a href="swimmers.php">Michael Phelps</a></li>
                            <li><a href="swimmers.php">Caeleb Dressel</a></li>
                            <li><a href="swimmers.php">Katie Ledecky</a></li>
                        </ul>
                    </li>
                    <li><a href="galeria.php">Galeria</a></li>
                    <li><a href="wyszukiwarka.php">Wyszukiwarka</a></li>
                    <li><a href="register.php">Zarejestruj</a></li>
                    <?php
                        loginHide();
                    ?>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About me</h1>
    </section>

    <section class="about-me">
        <div class="row">
            <div class="about-col">
                <h1>Swimteam</h1>
                <p> I started learning how to swim, when i was about 6 years old. From the first practise I have known that it was my thing. I joined the swimming club in my home town, when I was in the fourth grade. I have known that i wouldn't be the best, but i loved it, so I used to wake up at 4 a.m. to go to my morning practise and give up some meetings with my friends to go to the afternoon one. But I didn't really care abuot it as long as I could do something that i love. I had to leave my swimteam, becouse I moved out to Gdansk. </p>
                <a href="https://pl-pl.facebook.com/people/UKS-Orka-Mogilno/100057481658748/" class="hero-btn gold-btn">Explore now</a>
            </div>
            <div class="about-col">
                <img src="img/obraz11.jpg" alt="Swimteam" />
            </div>
        </div>

    </section>

    <section class="achievement">
        <h2>My achievements</h2>
        <table>
            <tr>
                <th> Achievement </th>
                <th> Kind of the competition </th>
                <th> Year </th>
            </tr>
            <tr>
                <th> 3rd place in Provincial Championships </th>
                <th>400m freestyle</th>
                <th>2020</th>
            </tr>
            <tr>
                <th>2nd place in Regionals</th>
                <th>100m backstroke</th>
                <th>2019</th>
            </tr>
            <tr>
                <th>23rd place in National Championships</th>
                <th>800m freestyle</th>
                <th>2020</th>
            </tr>
            <tr>
                <th>3rd place in Regionals </th>
                <th>200m freestyle</th>
                <th>2019</th>
            </tr>
        </table>
    </section>

     <div id="wrapper">
                <section>
                    <a href="./img/obraz10.jpg" target="_blank"><img src="./img/obraz10.jpg" alt="My team" class="img_gallery" /></a>
                    <a href="./img/obraz17.jpg" target="_blank"><img src="./img/obraz17.jpg" alt="Gym together" class="img_gallery" /></a>
                    <a href="./img/obraz15.jpg" target="_blank"><img src="./img/obraz15.jpg" alt="Girls" class="img_gallery" /></a>
                </section>
                <section>
                    <a href="./img/obraz19.jpg" target="_blank"><img src="./img/obraz19.jpg" alt="Run" class="img_gallery" /></a>
                    <a href="./img/obraz29.jpg" target="_blank"><img src="./img/obraz29.jpg" alt="Sauna" class="img_gallery" /></a>
                    <a href="./img/obraz16.jpg" target="_blank"><img src="./img/obraz16.jpg" alt="Train" class="img_gallery" /></a>
                </section>
       </div>
    



    <!--Footer-->
    <?php showFooter() ?>


   <!---JavaScript for Menu-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>


</body>
</html>