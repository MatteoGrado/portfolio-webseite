<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-stats.de</title>
    <link rel="stylesheet" href="../assets/css/login/style.css">
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
    <div class="logo-login">
        Einloggen:
    </div>
    <form action="./stats.php" method="POST" class="login-inputs">
        <p class="username">Username eingeben:</p>
            <input type="text" class="uname" name="username">
        <p class="passwort">Passwort eingeben:</p>
            <input type="password" class="password" name="passwort">
        <button type="submit" class="submit">Einloggen</button>
    </form>
</body>
</html>
<?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['passwort'])) {
        include('./Portfolio/src/connection-db/connect.php');
        $query = $con->prepare("SELECT * FROM username = :username");
        $query->bindParam(':username', $_POST['username']);
        $query->execute();
        if($query-> rowCount() == 1) {
            $details = $query->fetch(PDO::FETCH_ASSOC);
            if(md5($_POST['password'] . $details['salt']) == $details['passwort']) {
                $_SESSION['username'] = $details['username'];
        } else {
            $msg = "Incorrect Password.";
        }
    } else {
        $msg = "User no exists.";
    }
}