<?php
include('php/conexao.php');
session_start();
if (empty($_SESSION['adm_email'] or $_SESSION['adm_senha'])) {
    header("LOCATION: ./php/area_restrita.php");
} else {

    $consulta = "SELECT * FROM `carros` ORDER BY car_id";

    $consultar = $conexao->prepare($consulta);
    $consultar->execute();
}
?>

<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Cuiabana Motors</title>
</head>

<body class="bg-success">


    <!-- BARRA DE FERRAMENTAS DO SITE -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="./img/logo.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <d class="navbar-nav">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#carros">Adicionar Carros</a>
                        <a class="nav-link" href="./php/consultar_admin.php">Ver Carros</a>
                        <a class="nav-link" href="./php/consultar_moderadores.php">Ver Moderadores</a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link rounded btn btn-success ps-3 py-2 me-4" href="" data-bs-toggle="modal" data-bs-target="#cadastro_admin">Adicionar Moderador <img src="https://cdn-icons-png.flaticon.com/512/78/78948.png" alt="" width="30px" height="30px" class="ms-3"></a>
                    <a class="nav-link rounded btn btn-success ps-3 py-2" href="./index.php" data-bs-toggle="modal">SAIR<img src="img/adm/<?php echo $_SESSION['adm_foto'] ?>" alt="" width="30px" height="30px" class="ms-4"></a>
                </div>
            </div>
            </div>
        </nav>
    </header>


    <!-- CORPO DO SITE -->
    <div class="container-fluid justify-content-between">
        <div class="row">
            <p class="lead text-light display-5 text-center my-5"><b>Bem vindo, Xômano!</b></p>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2016/11/582b6f3c0e216302700e8c4fcorolla-dynamic-1.jpg?quality=70&strip=all" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.agoramotor.com.br/wp-content/uploads/2022/06/Civic-2023-frente.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2021/07/Fiat-Cronos-32.jpg?quality=70&strip=info" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Proximo</span>
                </button>
            </div>


            <!-- CARDS -->
            <?php foreach ($conexao->query($consulta) as $indice) { ?>
                <div class="col col-4 py-5 mb-5 ps-5">
                    <div class="card bg-dark" style="width: 18rem;">
                        <img src="img/carros/<?php echo $indice['car_foto']; ?>" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title text-light"><?php echo $indice['car_nome']; ?></h5>
                            <p class="card-text text-light lead">Apenas <?php echo $indice['car_valor']; ?></p>
                            <a class="btn btn-outline-success" href="php/informacoes.php?car_id=<?php echo $indice['car_id']; ?>"><b>Ver</b></a>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <!-- MODAL DE CADASTRO DOS CARROS -->
            <div class="modal fade" id="carros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Adicionando Carro...</h1>
                            <button type="button" class="btn btn-close btn-danger btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php include('./php/cadastro_carro.php'); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Sair</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- MODAL DE CADASTRO DOS MODERADORES -->
            <div class="modal fade" id="cadastro_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Cadastro de Moderadores:</h1>
                            <a type="button" class="btn btn-close btn-danger btn-lg" href="" aria-label="Close"></a>
                        </div>
                        <div class="modal-body">
                            <?php include('./php/cadastro_admin.php'); ?>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-outline-danger ms-3" href="">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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