<?php
include '../conetion.php';


$id_aeronave = $_GET['id_aeronave'];
$locacao = $_GET['loc'] == 0 ? 1 : 0;
$selectAloca = $conection->prepare("UPDATE aeronave SET locacao = $locacao WHERE id_aeronave = $id_aeronave;");
$selectAloca->execute();
header('location: ../../con_aeronave.php');