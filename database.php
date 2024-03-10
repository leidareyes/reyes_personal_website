<?php
    $hostName = "localhost";
    $dbUser = "id21973355_icarus";
    $dbPassword = "Jenlisard2k18_";
    $dbName = "id21973355_leidareyes";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong!");
    }
?>