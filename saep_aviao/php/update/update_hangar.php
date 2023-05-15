<?php
include '../conetion.php';

$id_hangar = $_POST['id_hangar'];
$nome_hangar = $_POST['nome_hangar'];

$update = $conection->prepare("UPDATE hangar SET nome_hangar='$nome_hangar' WHERE id_hangar = $id_hangar;");
$update->execute();
header('location: ../../con_hangar.php');