<?php
include '../conetion.php';

$delete = $conection->prepare("DELETE a.* FROM aeronave a INNER JOIN modelo m ON m.id_modelo = a.id_modelo INNER JOIN hangar h ON h.id_hangar = a.id_hangar WHERE a.id_aeronave = :id_aeronave;");
$delete->bindParam(':id_aeronave', $_GET['id_aeronave']);
$delete->execute();
header('location: ../../con_aeronave.php');