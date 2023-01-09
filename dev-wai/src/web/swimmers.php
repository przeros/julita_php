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
                    <li>
                        <a href="">SWIMMERS</a>
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
        <h1>World's famous swimmers</h1>
    </section>
    <!--Swimmers-->
    <section class="swimmers">
        <h1>Most famous swimmers in the world</h1>
        <div class="row">
            <div class="swimmers-col">
                <h3>Michael Phelps</h3>
                <p>is an American former competitive swimmer. He is the most successful and most decorated Olympian of all time with a total of 28 medals.</p>
            </div>
            <div class="swimmers-col">
                <h3>Caeleb Dressel</h3>
                <p> is an American professional swimmer who specializes in freestyle, butterfly, and individual medley events. He swims representing the Cali Condors as part of the International Swimming League.</p>
            </div>
            <div class="swimmers-col">
                <h3>Katie Ledecky</h3>
                <p> is an American competitive swimmer. She has won seven Olympic gold medals and 19 world championship gold medals, the most in history for a female swimmer.</p>
            </div>
        </div>
    </section>
    

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