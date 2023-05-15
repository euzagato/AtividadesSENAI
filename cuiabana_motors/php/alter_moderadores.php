<?php
include('./conexao.php');

$adm_id = $_POST['adm_id'];

$adm_email = $_POST['adm_email'];
$adm_nome = $_POST['adm_nome'];
$adm_senha = MD5($_POST['adm_senha']);
$adm_foto = $_FILE['adm_foto'];

$foto_adm = $_FILES['adm_foto']['name'];
$tmpname = $_FILES['adm_foto']['tmp_name'];
$pastaimg = "../img/adm/" . $foto_adm;
move_uploaded_file($tmpname, $pastaimg);

$alter =  "UPDATE `admin` SET `adm_nome`='$adm_nome',`adm_foto`='$foto_adm',`adm_email`='$adm_email',`adm_senha`='$adm_senha' WHERE adm_id = '$adm_id'; ";

$conexao->exec($alter);
$conexao = null;

header("LOCATION: consultar_moderadores.php");
