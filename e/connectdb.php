<?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "4047db";
    $conn = mysqli_connect($host, $user, $pwd, $db) or die;
    mysqli_query($conn, "SET NAMES utf8");
?>