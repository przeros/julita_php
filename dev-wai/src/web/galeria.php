<?php session_start(); 
      include_once 'functions.php';
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
        <h1>Galeria</h1>
    </section>

    <?php
      ifuserLogged();

      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if (strpos($fullUrl, "watermark=empty") == true)
      {
          echo '<div class="alert alert-danger">
                  <li>Wypełnij pole ze znakiem wodnym!</li>
                </div>';
      }
    ?>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Tytuł:</label><br/>
        <input type="text" name="title" placeholder="Image title..."><br/><br/>
        <label>Autor:</label><br/>
        <?php
          if (isset($_SESSION["username"]))
          {
              echo '<input type="text" name="author" value='.$_SESSION["username"].'><br/><br/>';
              echo '<input type="radio" name="status" value="prywatne">prywatne
                    <input type="radio" name="status" value="publiczne">publiczne<br/><br/><br/>';
          }
          else
              echo '<input type="text" name="author" placeholder="Image author..."><br/><br/>';  
        ?>
        <label>Znak Wodny:</label><br/>
        <input type="text" name="watermark" placeholder="Watermark text..."><br/><br/>
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>   

    <form action="deleteImages.php" method="POST">
    <br/><br/><button type="submit" name="deleteAllImages">Delete Images</button>
    </form>
    <br/><br/>`

      <?php
        include 'upload_view.php';
      ?>

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
  </div>
</body>
        
</html>
