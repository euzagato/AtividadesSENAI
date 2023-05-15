<?php
include '../conetion.php';


$nome_modelo = $_POST['nome_modelo'];

$insert = $conection->prepare("INSERT INTO modelo(nome_modelo) VALUES (:nome_modelo)");
$insert->bindParam(':nome_modelo', $nome_modelo);
$insert->execute();
header('location: ../../con_modelo.php');