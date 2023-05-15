<?php
include('conexao.php');


$car_id = $_GET['car_id'];
$consulta = "SELECT * FROM `carros` WHERE car_id = '$car_id'; ";

$consultar = $conexao->prepare($consulta);
$consultar->execute();
?>
<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Cuiabana Motors</title>
</head>

<body class="bg-success">



    <!-- BARRA DE FERRAMENTAS DO SITE -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <d class="navbar-nav">
                        <a class="nav-link" href="consultar_cliente.php">Ver Carros</a>
                </div>
            </div>
        </nav>
    </header>



    <!-- CORPO DO SITE -->
    <?php foreach ($conexao->query($consulta) as $indice) { ?>
        <div class="container justify-content-between">
            <div class="row">
                <p class="lead text-light display-5 text-center mt-5"><b><?php echo $indice['car_nome']; ?></b></p>

                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/carros/<?php echo $indice['car_foto']; ?>" class="d-block w-100 rounded" alt="...">
                        </div>
                    </div>
                </div>



                <!-- INFORMAÇÔES DO CARRO -->
                <div class="text-center">
                    <h1 class="bg-dark lead text-light display-5 mb-0 rounded"><b class="display-6 lead"><?php echo $indice['car_modelo']; ?></b></h1>
                    <h1 class="bg-dark lead text-light display-5 mb-0 rounded"><b class="display-6 lead"><?php echo $indice['car_ano']; ?></b></h1>
                    <h1 class="bg-dark lead text-light display-5 mb-5 rounded"><b class="display-6 lead"><?php echo $indice['car_valor']; ?></b></h1>
                    <p class="mb-5 rounded">.</p>
                </div>
            <?php } ?>



        <!-- FIM DO SITE -->
        <footer class="fixed-bottom bg-dark">
            <div class="container-fluid bg-dark">
                <div class="row bg-dark container-fluid">
                    <div class="col col-12 bg-dark">
                        <p class="lead text-light text-center py-2">Todos os direitos reservados à <b>Cuiabana Motors</b>.</p>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>