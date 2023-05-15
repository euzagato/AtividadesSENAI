<?php
    $dbhost = "localHost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "bd_cuiabanamotors";

    $conexao = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpassword);
?>