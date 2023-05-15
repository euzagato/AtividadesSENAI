<?php
include 'php/conetion.php';


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
    <form action="php/INSERT/insert_aeronave.php" method="post">

        <label for="">Hangar:</label>
        <select name="id_hangar">
            <option value="1">Selecione o Hangar</option>

            <!-- 
                FOREACH PARA PERCORRER A TABELA "hangar" E TRAZER OS NOMES DOS HANGARES PARA CADA OPÇÃO.
            -->
            <?php foreach ($select_hangar as $hangar) { ?>
                <option value="<?php echo $hangar['id_hangar']; ?>"><?php echo $hangar['nome_hangar']; ?></option>
            <?php } ?>
        </select><br><br>

        <label for="">Modelo:</label>
        <select name="id_modelo">
            <option value="1">Selecione o Modelo</option>

            <!-- 
                FOREACH PARA PERCORRER A TABELA "modelo" E TRAZER OS NOMES DOS MODELOS PARA CADA OPÇÃO.
            -->
            <?php foreach ($select_modelo as $modelo) { ?>
                <option value="<?php echo $modelo['id_modelo']; ?>"><?php echo $modelo['nome_modelo']; ?></option>
            <?php } ?>
        </select><br><br>

        <label for="">Nome do prefixo</label>
        <input type="text" name="prefixo">



        <br><br><br>
        <input class="botao" type="submit" value="Cadastrar">
    </form>
</body>

</html>