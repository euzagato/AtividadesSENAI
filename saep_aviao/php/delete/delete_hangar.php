<?php
include '../conetion.php';

$delete = $conection->prepare("DELETE FROM hangar WHERE id_hangar = :id_hangar;");
$delete->bindParam(':id_hangar', $_GET['id_hangar']);
$delete->execute();
header('location: ../../con_hangar.php');