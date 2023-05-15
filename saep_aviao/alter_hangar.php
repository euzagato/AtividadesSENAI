<?php 
include 'php/conetion.php';

$id_hangar = $_GET['id_hangar'];
$selectHangar = $conection->prepare("SELECT nome_hangar FROM hangar WHERE id_hangar = $id_hangar");
$selectHangar->execute();

foreach ($selectHangar as $hangar) {
    $nome_hangar = $hangar['nome_hangar'];
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Hangar</title>
    <link rel="stylesheet" href="css/stl.css">
</head>
<body>
    <form action="php/update/update_hangar.php" method="post">
        <label for="">Nome do Hangar:</label>
        <input type="text" name="nome_hangar" value="<?php echo $nome_hangar;?>">



        <br><br><br>
        <input type="hidden" name="id_hangar" value="<?php echo $id_hangar; ?>">
        <input class="botao" type="submit" value="Alterar">
    </form>
</body>
</html>