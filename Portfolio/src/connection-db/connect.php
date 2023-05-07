<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $user = 'root';
    $pw = 'Sumafelo03!';
    $dsn = 'mysql:dbname=statistics;host=192.168.8.101';
    
    $con = new PDO($user, $dsn, $pw);

    