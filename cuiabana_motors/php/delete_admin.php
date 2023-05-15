<?php
include('./conexao.php');

$adm_id = $_GET['adm_id'];
$delete = "DELETE FROM `admin` WHERE adm_id = '$adm_id';";

$conexao->exec($delete);
header('LOCATION: consultar_moderadores.php');