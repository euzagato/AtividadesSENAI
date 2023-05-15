<?php
include '../conetion.php';


$id_hangar = $_POST['id_hangar'];
$id_modelo = $_POST['id_modelo'];
$prefixo = $_POST['prefixo'];

$insert = $conection->prepare("INSERT INTO aeronave(id_hangar, id_modelo, prefixo, locacao) VALUES (:id_hangar, :id_modelo, :prefixo, 0)");
$insert->bindParam(':id_hangar', $id_hangar);
$insert->bindParam(':id_modelo', $id_modelo);
$insert->bindParam(':prefixo', $prefixo);
$insert->execute();
header('location: ../../cad_aeronave.php');