<?php
include 'php/conetion.php';

$id_aeronave = $_GET['id_aeronave'];
$selectAeronave = $conection->prepare("SELECT hangar.nome_hangar, modelo.nome_modelo, aeronave.prefixo FROM aeronave INNER JOIN modelo ON modelo.id_modelo = aeronave.id_modelo INNER JOIN hangar ON hangar.id_hangar = aeronave.id_hangar WHERE id_aeronave = $id_aeronave;");
$selectAeronave->execute();

foreach ($selectAeronave as $alterAeronave) {
    $nome_hangar = $alterAeronave['nome_hangar'];
    $nome_modelo = $alterAeronave['nome_modelo'];
    $nome_prefixo = $alterAeronave['prefixo'];
}


//BUSCAR TODOS OS NOMES DOS HANGARES:
$select_hangar = $conection->prepare("SELECT id_hangar, nome_hangar FROM hangar ORDER BY id_hangar;");
$select_hangar->execute();


//BUSCAR TODOS OS NOMES DOS MODELOS:
$select_modelo = $conection->prepare("SELECT id_modelo, nome_modelo FROM modelo ORDER BY id_modelo;");
$select_modelo->execute();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aeronave</title>
    <link rel="stylesheet" href="css/stl.css">
</head>

<body>
    <form action="php/update/update_aeronave.php" method="post">

        <label for="">Hangar:</label>
        <select name="id_hangar">
            <option value="1"><?php echo $nome_hangar; ?></option>

            <!-- FOREACH PARA PERCORRER A TABELA "hangar" E TRAZER OS NOMES DOS HANGARES PARA CADA OPÇÃO. -->
            <?php foreach ($select_hangar as $hangar) { ?>
                <option value="<?php echo $hangar['id_hangar']; ?>"><?php echo $hangar['nome_hangar']; ?></option>
            <?php } ?>
        </select><br><br>

        <label for="">Modelo:</label>
        <select name="id_modelo">
            <option value="1"><?php echo $nome_modelo; ?></option>

            <!-- FOREACH PARA PERCORRER A TABELA "modelo" E TRAZER OS NOMES DOS MODELOS PARA CADA OPÇÃO. -->
            <?php foreach ($select_modelo as $modelo) { ?>
                <option value="<?php echo $modelo['id_modelo']; ?>"><?php echo $modelo['nome_modelo']; ?></option>
            <?php } ?>
        </select><br><br>

        <label for="">Nome do prefixo</label>
        <input type="text" name="prefixo" value="<?php echo $nome_prefixo; ?>">



        <br><br><br>
        <input type="hidden" name="id_aeronave" value="<?php echo $id_aeronave; ?>">
        <input class="botao" type="submit" value="Alterar">
    </form>
</body>

</html>