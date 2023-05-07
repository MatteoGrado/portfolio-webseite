<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatteoGrado-Portfolio.de</title>
    <link rel="stylesheet" href="./assets/css/start/style.css">
</head>
<body>
    <h1 class="header">
        <a href="index.php">Matteo</a>
    </h1>
    <nav class="navbar">
        <a href="#" class="about">About</a>
        <a href="#" class="hire">Hire Me!</a>
        <a href="#" class="projects">Projects</a>
        <a href="./sites/php-webproject.php" class="PHP">PHP project tasting</a>
    </nav>
        <button class="login-btn">
            <a href="./sites/login-stats.php" class="login-stats">Login</a>
        </button>
    <div class="head2">
        <p id="head">Hi I'm Matteo Grado,<br></p>
    </div>
        <div class="discription-Matteo">
            I'm 19 years old.<br> And live in Germany.<br>
            At the moment I'm at a job training.<br>
            My favorite language is PHP.<br> At the moment I learn js.<br>
            In the category Projects you will find my projects in PHP and JS.<br>
        </div>
    <div class="img-startsite">
        <img src="./assets/img/selfi-start.jpg"
        style=
        "width: 500px;
        height: 500px;
        border: 5px solid blue;
        border-radius: 250px;
        display: flex;
        margin-left: 1200px;
        margin-top: -350px;
        ">
    </div>
        <div class="comp1">
            <div class="project1">
                <img src="./assets/img/first-php-project.jpg" style="width: 350px; height: 350px; display: flex; margin-left: 200px;">
            </div>
                <p id="overwrite">Register Screen:<br></p>
            <div class="text1-project1">
            Hier sieht man ein simples<br>registrierungs-system.<br>Außerdem arbeite ich noch an einem Login-Screen <br> der über die selbe DB läuft.<br>
            </div>
        </div>
        <div class="comp2">
            <div class="project2">
                <img src="./assets/img/book-for-project.png" id="png-bookstyle">
            </div>
                <p id="overwrite-pj2">Gästebuch:<br></p>
            <div class="text2-project2">
            Mein selbst entwickeltes Gästebuch.<br> Es befindet sich zur zeit noch in Arbeit,<br> da einige Teile noch fehlen.<br> Auf GitHub ist jedoch das grundprenzip<br> berteis zu finden.<br>
            </div>
        </div>
    <div class="comp3">
        <div class="project3">
            <img src="./assets/img/search-for-project.png" id="png-searchstyle">
        </div>
            <p id="overwrite-pj3">Suchmaschiene in PHP:<br></p>
        <div class="text3-project3">
            Hier findet man meine Suchmaschiene.<br> Diese durchsucht eine Datenbank.<br> Testen kann man sie im<br> PHP web project reiter.<br>
        </div>
    </div>
    <form action="index.php" method="POST">
        <p id="name">Neme eintragen:</p>
            <input type="text" placeholder="Name eingeben" class="uname" name="username">
        <p id="email">E-mail eintragen:</p>
            <input type="text" placeholder="E-Mail eingeben" class="ue-mail" name="usermail">
        <p id="message">Gib deine Nachricht ein</p>
            <input type="text" class="u-message" name="user-message">
        <button type="submit" id="sub-inf" class="submit-btn">Absenden</button>
    </form>
    <div class="impressum">
        <p class="matteo-overwrite">Matteo Grado<br></p>
        <div class="contact">    
            Kontakt:<br>
            Matteo Grado<br>
            Kirchstraße 28<br>
            72145 Hirrlingen<br>
            Mail: matteogrado181003@gmail.com<br>
            Mobil: +49 0163 8716219<br>
        </div>
        <div class="qulls">
            <a href="#" id="alert-data" class="data">Datenschutzt</a>
        </div>
        <div class="licencs">
            <a href="#" id="alert-lic" class="lic">Lizenz</a>
        </div>
    </div>
    <script src="./assets/js/roll.js"></script>
</body>
</html>
<?php
    include('./Portfolio/src/connection-db/connect.php');

    