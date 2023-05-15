<?php
include '../conetion.php';


$nome_hangar = $_POST['nome_hangar'];

$insert = $conection->prepare(" INSERT INTO hangar(nome_hangar) VALUES (:nome_hangar)");
$insert->bindParam(':nome_hangar', $nome_hangar);
$insert->execute();
header('location: ../../con_hangar.php');