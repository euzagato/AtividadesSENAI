<?php
include '../conetion.php';

$id_aeronave = $_POST['id_aeronave'];
$id_hangar = $_POST['id_hangar'];
$id_modelo = $_POST['id_modelo'];
$prefixo = $_POST['prefixo'];

$update = $conection->prepare("UPDATE aeronave SET id_hangar='$id_hangar', id_modelo='$id_modelo', prefixo='$prefixo' WHERE id_aeronave = $id_aeronave;");
$update->execute();
header('location: ../../con_aeronave.php');