<?php
include '../conetion.php';

$id_modelo = $_POST['id_modelo'];
$nome_modelo = $_POST['nome_modelo'];

$update = $conection->prepare("UPDATE modelo SET nome_modelo='$nome_modelo' WHERE id_modelo = $id_modelo;");
$update->execute();
header('location: ../../con_modelo.php');