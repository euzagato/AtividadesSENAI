<?php
include('conexao.php');
session_start();

$adm_email = $_POST['adm_email'];
$adm_senha = MD5($_POST['adm_senha']);
$consulta = "SELECT * FROM `admin` ORDER BY adm_id";

$consultar = $conexao->prepare($consulta);
$consultar->execute();

foreach ($conexao->query($consulta) as $indice) {
    if (($adm_email == $indice['adm_email']) and ($adm_senha == $indice['adm_senha'])) {
        $_SESSION['adm_email'] = $indice['adm_email'];
        $_SESSION['adm_senha'] = $indice['adm_senha'];
        $_SESSION['adm_nome'] = $indice['adm_nome'];
        $_SESSION['adm_foto'] = $indice['adm_foto'];
        $consultar = null;
        header('LOCATION: ../admin_page.php');
    } else {
        $consultar = null;
        header('LOCATION: ../index.php');
    }
}
