<?php
include '../conetion.php';

$delete = $conection->prepare("DELETE FROM modelo WHERE id_modelo = :id_modelo;");
$delete->bindParam(':id_modelo', $_GET['id_modelo']);
$delete->execute();
header('location: ../../con_modelo.php');