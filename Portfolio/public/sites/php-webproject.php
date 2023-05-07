<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-webproject.de</title>
    <link rel="stylesheet" href="../assets/css/search/style.css">
</head>
<body>
    <h1 class="header">
        <a href="../index.php">Matteo</a>
    </h1>
    <nav class="navbar">
        <a href="#" class="about">About</a>
        <a href="#" class="hire">Hire Me!</a>
        <a href="#" class="projects">Projects</a>
        <a href="php-webproject.php" class="PHP">PHP project tasting</a>
    </nav>
    <form action="#" method="POST" class="search">
        <h2 class="search-header">Suche</h2>
        <input type="text" class="search-input" autocomplete="off">
        <button type="submit" class="submit-search-button">Suchen</button>
    </form>
    <script src="../assets/js/"></script>
</body>
</html>
<?php
    include ('./Portfolio/src/connection-db/connect.php');

    