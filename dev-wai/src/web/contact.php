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
            <a href="index.php"><img src="img/logo.png" /></a>
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
        <h1>Contact</h1>
    </section>
    <!--Contact-->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.3764417298944!2d17.960733415355975!3d52.65317783410397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704a115fd0910cd%3A0x57e5f51184e5a826!2sKryta%20P%C5%82ywalnia%20w%20Mogilnie!5e0!3m2!1spl!2spl!4v1668120034710!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                        <h5>J.Trzcinskiego 2</h5>
                        <p> 88-300 Mogilno</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                        <h5>+48 012345678</h5>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                        <h5>xyz@icloud.com</h5>
                        <p> Email</p>
                </div>
            </div>
            <div class="contact-col">
                <form method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Enter your name" required>
                    <br>
                    <label for="surname">Surname</label>
                    <input type="text" id="surname" placeholder="Enter your surname" required>
                    <br>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                    <br>
                    <label for="age">Age group:</label>
                    <input type="radio" id="age1">
                    <label for="age1">0-18</label>
                    <input type="radio" id="age2">
                    <label for="age2">18-30</label>
                    <input type="radio" id="age3">
                    <label for="age3">30-60</label>
                    <input type="radio" id="age4">
                    <label for="age4">>60</label>
                    <br>
                    <label for="sex">Sex:</label>
                    <select id="sex" name="sex">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                    <br>
                    <label for="swimmers">Your favourite swimmers:</label>
                    <select id="swimmers" name="swimmers" size="3" multiple>
                        <option value="Phelps">Michael Phelps</option>
                        <option value="Katie">Katie Ledecky</option>
                        <option value="Caeleb">Caeleb Dressel</option>
                    </select>
                    <br>
                    <label for="comment">Your comment:</label>
                    <textarea name="comment" rows="10" cols="30" placeholder="Enter your comment:"></textarea>
                    <button  type="submit" class="hero-btn gold-btn" onclick="test()">Submit</button>
                </form>
            </div>
        </div>
    </section>


<script src="./index.js" defer></script>


    <!--Footer-->
    <section class="footer">
        <h4>About me</h4>
        <p>vfdcvfrrgwefv</p>
        <button onclick="addElement()" class="hero-btn gold-btn">Surprise!</button>
    </section>

</body>
</html>