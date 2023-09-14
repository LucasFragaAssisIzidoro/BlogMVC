<?php
    include './../app/configuracao.php';
    include './../app/libraries/Rota.php';
    include './../app/libraries/Controller.php';
    include './../app/libraries/Database.php';
    $db = new Database;


    $usuarioId = 10;
    $titulo = 'Titulo do post';
    $texto = 'Texto do post';

    $db->query("INSERT INTO posts (id_usuario, titulo, texto) values (:usuario_id ,:titulo,:texto)");
    $db->bind(":usuario_id", $usuarioId);
    $db->bind(":titulo", $titulo);
    $db->bind(":texto", $texto);
    $db->executa();

    echo "<hr>Total de Resultados ".$db->totalResultados();
    echo "<hr>Ultimo id inserido ".$db->ultimoIdInserido();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NOME?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL?>/public/css/estilos.css">
</head>
<body>
    <?php
        include '../app/views/topo.php';
        $rotas = new Rota();
        include '../app/views/rodape.php';
        

    ?>
</body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo URL?>/public/js/main.js"></script>
</html>