<?php session_start();
  include_once 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0" />
    <title>Swimmig</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" />
    <script src="./index.js" async></script>
    <script src="jquery/jquery.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
                <body>
                    <section class="header">
                        <nav>
                            <a href="index.php"><img src="img/logo.png"></a>
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
                                    <li><a href="contact.php">CONTACT</a></li></li>
                                </ul>
                            </div>
                            <i class="fa fa-bars" onclick="showMenu()"></i>
                        </nav>
                        <div class="text-box" name="up">
                            <h1>We swim</h1>
                            <p>
                                Because world looks better under water.
                            </p>
                            <a href="https://pl-pl.facebook.com/people/UKS-Orka-Mogilno/100057481658748/" class="hero-btn">Visit to know more</a>
                        </div>
                    </section>

                    <!--Swimmers-->
                    <section class="swimmers">
                        <h1>Most famous swimmers in the world</h1>
                        <div class="row">
                            <div class="swimmers-col">
                                <h3>Michael Phelps</h3>
                                <p> is an American former competitive swimmer. He is the most successful and most decorated Olympian of all time with a total of 28 medals.</p>
                            </div>
                            <div class="swimmers-col">
                                <h3>Caeleb Dressel</h3>
                                <p>yguugsdvbhiwoujip</p>
                            </div>
                            <div class="swimmers-col">
                                <h3>Katie Ledecky</h3>
                                <p>plefoijouo2jip</p>
                            </div>
                        </div>
                    </section>
                    <!--About-->
                    <section class="about">
                        <h1>About me</h1>
                        <p>uyugtrdefcygvuhbijno</p>
                        <div class="row">
                            <div class="about-col">
                                <img src="img/obraz10.jpg">
                                    <div class="layer">
                                        <h3>Swimteam</h3>
                                    </div>
                            </div>
                            <div class="about-col">
                                <img src="img/obraz26.jpg">
                                    <div class="layer">
                                        <h3>Swimcamps</h3>
                                    </div>
                            </div>
                            <div class="about-col">
                                <img src="img/obraz27.jpg">
                                    <div class="layer">
                                        <h3>Competitions</h3>
                                    </div>
                            </div>
                        </div>
                    </section>

                    <!---Swimteam-->
                    <section class="swimteam">
                        <h1>Swimteam</h1>
                        <p>Your teammates are your best friends.</p>
                        <div class="row" id="div1">
                            <div class="swimteam-col">
                                <img src="img/obraz22.jpg">
                                    <h3>Canoeing</h3>
                                    <p>We spend more time together, than we do with our families. So we beacame a family.</p>
                            </div>
                            <div class="swimteam-col">
                                <img src="img/obraz21.jpg">
                                    <h3>Our first running competition, because why not?</h3>
                                    <p>Everyone of us is different, everyone has a different purpose in their life. But we do know one thing, that by the end of the day we all are gonna meet at the practise and live the life that noone else has any idea about.</p>
                            </div>
                            <div class="swimteam-col">
                                <img src="img/obraz23.jpg">
                                    <h3>Just something we do for fun</h3>
                                    <p> We meet every morning and every afternoon to train and forget about the world around us, becouse everything that matters is underwater.</p>
                            </div>
                        </div>
                    </section>
                    <!--Footer-->
                    <section class="footer">
                        <h4>About us</h4>
                        <p>vfdcvfrrgwefv</p>
                        <button id="goup">
                            <svg width="400" height="180">
                                <rect x="50" y="20" rx="20" ry="20" width="150" height="150"
                                    style="fill: #b0974f; stroke: black; stroke-width: 5; opacity: 0.5" />
                            </svg>
                        </button>
                        <br>
                            <button onclick="addElement()" class="hero-btn gold-btn">Surprise!</button>
                            <br>
                            </section>
                            <div id="footer">
                                <input id="dateinput" placeholder="Select date" type="text">
                            </div>
                            <input class="time" type="text" value="14:30" />

                            <script>
                                $("#footer").datepicker({
                                    changeYear: true,
                                showOtherMonths: true,
                                minDate: new Date(2022, 0, 1),
                                maxDate: new Date(2024, 0, 1)
                });
    </script>
    <script>
        $(document).ready(function () {
            $("h4").draggable();
});
    </script>
    <script>
        $('.time').clockTimePicker({
            afternoonHoursInOuterCircle: false,
        alwaysSelectHoursFirst: false,
        autosize: false,
        colors: {
            buttonTextColor: '#0797FF',
        clockFaceColor: '#EEEEEE',
        clockInnerCircleTextColor: '#888888',
        clockInnerCircleUnselectableTextColor: '#CCCCCC',
        clockOuterCircleTextColor: '#000000',
        clockOuterCircleUnselectableTextColor: '#CCCCCC',
        hoverCircleColor: '#DDDDDD',
        popupBackgroundColor: '#FFFFFF',
        popupHeaderBackgroundColor: '#0797FF',
        popupHeaderTextColor: '#FFFFFF',
        selectorColor: '#0797FF',
        selectorNumberColor: '#FFFFFF',
        signButtonColor: '#FFFFFF',
        signButtonBackgroundColor: '#0797FF',
        contextmenu: false,
        modeSwitchSpeed: 500,
        popupWidthOnDesktop: 200,
        required: false,
        separator: ':',
},
})
        $('.time').clockTimePicker('value', '10:05');
        $('.time').clockTimePicker('show');
        $('.time').clockTimePicker('hide');
        $('.time').clockTimePicker('dispose');
        $('.time').clockTimePicker('value');
        $('.time').clockTimePicker('value', '08:00');

    </script>

    </body>
</html>