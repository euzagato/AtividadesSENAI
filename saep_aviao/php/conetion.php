<?php
$servidor = "localhost:3306";
$banco = "locaaeronave";
$usuario = "root";
$senha = "";

$conection = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
