<?php
    if(empty($_SESSION['adm_email'] or $_SESSION['adm_senha'])) {
        header('location: area_restrita.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Produto</title>
</head>

<body>
    <div class="container">
        <form action="alter.php" method="post" enctype="multipart/form-data">
        <label class="mt-3 mb-1"><b>Nome do Carro*:</b></label>
            <input type="text" name="car_nome" class="form-control" value="<?php echo $indice['car_nome']; ?>" required>

            <label class="mt-4 mb-1"><b>Renavam*:</b></label>
            <input type="text" name="car_vin" class="form-control" value="<?php echo $indice['car_vin']; ?>" required>
            
            <label class="mt-4 mb-1"><b>Foto do Carro:</b></label>
            <input type="file" name="car_foto" class="form-control" value="<?php echo $indice['foto_car'];?>" required>

            <label class="mt-4 mb-1"><b>Modelo*:</b></label>
            <input type="text" name="car_modelo" class="form-control" value="<?php echo $indice['car_modelo']; ?>" required>

            <label class="mt-4 mb-1"><b>Ano*:</b></label>
            <input type="number" name="car_ano" class="form-control" value="<?php echo $indice['car_ano']; ?>" required>

            <label class="mt-4 mb-1"><b>Preço do Carro*:</b></label>
            <input type="text" name="car_valor" class="form-control" value="<?php echo $indice['car_valor'];?>" required>

            <input type="hidden" name="car_id" value="<?php echo $indice['car_id']; ?>">
            <input type="submit" href="alter.php" value="Alterar" class="btn btn-outline-success mt-5 btn-lg">
        </form>
    </div>
</body>

</html>