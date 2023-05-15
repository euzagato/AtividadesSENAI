<?php
include('./conexao.php');

$car_id = $_GET['car_id'];
$delete = "DELETE FROM `carros` WHERE car_id = '$car_id';";

$conexao->exec($delete);
header('LOCATION: consultar_admin.php');