<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "fastfood";
    $db   = mysqli_connect($host, $user, $pass, $database);
    mysqli_set_charset($db, 'UTF8');
?>