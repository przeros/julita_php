<?php
  require_once 'login.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Moje Hobby</title>

        <script src="script.js"></script>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="jquery.min.js"></script>                    
        <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
        <noscript>
            <link rel="stylesheet" type="text/css" href="noscript_style.css">
        </noscript>
        
      </head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="img/logo.png" alt="Logo" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li>
                        <a href="">SWIMMERS</a>
                        <ul>
                            <li><a href="swimmers.html">Michael Phelps</a></li>
                            <li><a href="swimmers.html">Caeleb Dressel</a></li>
                            <li><a href="swimmers.html">Katie Ledecky</a></li>
                        </ul>
                    </li>
                    <li><a href="galeria.php">Galeria</a></li>
                    <li><a href="wyszukiwarka.php">Wyszukiwarka</a></li>
                    <li><a href="register.php">Zarejestruj się</a></li>
                    <li><a href="login_view.php">Zaloguj</a></li>
                    <li><a href="logout.php">Wyloguj się</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Zaloguj</h1>
    </section>
    
    <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullUrl, "username=wrong") == true)
        {
            echo '<div class="alert alert-danger">
                    <li>Username does not exist!</li>
                  </div>';
        }
        else if ((strpos($fullUrl, "password=wrong") == true))
             {
                echo '<div class="alert alert-danger">
                        <li>Wrong Password!</li>
                      </div>';
             }
    ?>

    <form action="login.php" method="POST">

        <div class="container_register">

            <label for="username1">Login</label><br/>
            <input type="text" name="username1" placeholder="Wprowadź login"><br/><br/>

            <label for="password">Hasło</label><br/>
            <input type="password" name="password1" placeholder="Wprowadź hasło"><br/><br/>

            <button type="submit" name="submit" class="registerbtn">Zaloguj się</button>

        </div>
    </form>   

    <!--Footer-->
    <section class="footer">
        <h4>About me</h4>
        <p>Julita Zamroczyńska gr.1  193235</p>
        <svg height="210" width="500" class="line">
            <line x1="0" y1="0" x2="5000" y2="0" />
        </svg>
    </section>


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
  </div>
</body>
        
</html>