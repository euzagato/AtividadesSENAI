<?php
include 'php/conetion.php';

$id_modelo = $_GET['id_modelo'];
$selectModelo = $conection->prepare("SELECT nome_modelo FROM modelo WHERE id_modelo = $id_modelo");
$selectModelo->execute();

foreach ($selectModelo as $modelo) {
    $nome_modelo = $modelo['nome_modelo'];
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Modelo</title>
    <link rel="stylesheet" href="css/stl.css">
</head>
<body>
    <form action="php/update/update_modelo.php" method="post">
        <label for="">Nome do Modelo:</label>
        <input type="text" name="nome_modelo" value="<?php echo $nome_modelo; ?>">



        <br><br><br>
        <input type="hidden" name="id_modelo" value="<?php echo $id_modelo;?>">
        <input class="botao" type="submit" value="Alterar">
    </form>
</body>
</html>