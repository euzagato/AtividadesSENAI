<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stl2.css">
    <title>Cadastro Hangar</title>
</head>

<body>
    <header>
        <h1>Alocação de Hangar</h1>
        <img src="img/banner2.jpg" alt="aviao">
    </header>

    <div class="container">
        <div><img src="img/hangar-1.png" alt="hangar"></div>
        <div><img src="img/hangar-1.png" alt="hangar"></div>
        <div><img src="img/hangar-1.png" alt="hangar"></div>
        <div> <img src="img/hangar-1.png" alt="hangar"></div>
        <div> <img src="img/hangar-1.png" alt="hangar"></div>
    </div>
    <hr>


    <div class="container2">
        <?php for ($i = 0; $i <= 2; $i++) { ?>
            <img src="img/hangar-2.png">
        <?php } ?>
    </div>

    <div class="miniatura1">

        <div><img class="aviao" src="img/aviao.png" alt="hangar"></div>
        <div><img class="heli" src="img/helicoptero.png" alt="hangar"></div>
        <div><img class="teco" src="img/tecoteco.png" alt="hangar"></div>

    </div>
    <hr>

    <div class="container2">
        <?php for ($i = 0; $i <= 2; $i++) { ?>
            <img src="img/hangar-2.png">
        <?php } ?>
    </div>

    <div class="miniatura2">
        <div><img class="taxi" src="img/taxiaereo.png" alt="hangar"></div>
        <div><img class="aero" src="img/aeronave-militar.png" alt="hangar"></div>
        <div><img class="star" src="img/starwars.png" alt="hangar"></div>
    </div>
    <hr>

    <div class="buttons">
        <div>
            <a type="submit" href="cad_hangar.php">Cadastrar Hangar</a>
            <a type="submit" href="con_hangar.php">Consultar Hangar</a>
        </div>

        <div>
            <a type="submit" href="cad_modelo.php">Cadastrar Modelo</a>
            <a type="submit" href="con_aeronave.php">Consultar Modelo</a>
        </div>

        <div>
            <a type="submit" href="cad_aeronave.php">Cadastrar Aeronave</a>
            <a type="submit" href="con_aeronave.php">Consultar Aeronave</a>
        </div>
    </div>

    <div class="buttons">
        <button type="submit">Alocar aviões por Hangar</button>

    </div>
    <hr>

    <footer>
        <h3>
            Todos os direitos reservados A GRANDÂO HAHAHAH
        </h3>
    </footer>
</body>

</html>