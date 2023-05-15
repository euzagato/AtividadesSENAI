<?php
include('./conexao.php');

$adm_email = $_POST['adm_email'];
$adm_nome = $_POST['adm_nome'];
$adm_senha = MD5($_POST['adm_senha']);
$adm_foto = $_FILE['adm_foto'];

$foto_adm = $_FILES['adm_foto']['name'];
$tmpname = $_FILES['adm_foto']['tmp_name'];
$pastaimg = "../img/adm/" . $foto_adm;
move_uploaded_file($tmpname, $pastaimg);

$insert =  "INSERT INTO `admin`(`adm_id`, `adm_nome`, `adm_foto`, `adm_email`, `adm_senha`) VALUES ('','$adm_nome','$foto_adm','$adm_email','$adm_senha');";
$conexao->exec($insert);
$conexao = null;

header('location: ../admin_page.php');