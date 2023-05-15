<?php
include('./conexao.php');

$car_vin = $_POST['car_vin'];
$car_nome = $_POST['car_nome'];
$car_foto = $_FILES['car_foto'];
$car_modelo = $_POST['car_modelo'];
$car_ano = $_POST['car_ano'];
$car_valor = $_POST['car_valor'];
$car_data = $_POST['car_data'];

$foto_car = $_FILES['car_foto']['name'];
$tmpname = $_FILES['car_foto']['tmp_name'];
$pastaimg = "../img/carros/" . $foto_car;
move_uploaded_file($tmpname, $pastaimg);

$insert = "INSERT INTO `carros`(`car_id`, `car_vin`, `car_nome`, `car_foto`, `car_modelo`, `car_ano`, `car_valor`, `car_data`) VALUES ('','$car_vin','$car_nome','$foto_car','$car_modelo','$car_ano','$car_valor',now());";
$conexao->exec($insert);
$conexao = null;
header("LOCATION: ../admin_page.php");
?>