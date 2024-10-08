<?php
include "./../App/configuracao.php";
include "./../App/Libraries/Rota.php";
include "./../App/Libraries/Controller.php";
include "./../App/Libraries/Database.php";

$db = new Database;
$usuario_id = 10;
$titulo = 'terceirão não para de falar..';
$texto = 'turma conversa muito...';

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");
$db->bind(":usuario_id",$usuario_id);
$db->bind(":titulo",$titulo);
$db->bind(":texto",$texto);

$db->executa();

echo '<hr>Total Resultados: '.$db->totalResultados();
echo '<hr>Ultimo ID inserido'.$db->ultimoIdInserido();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
</head>
<body>

    <?php
    include "../App/Views/header.php";
    $rotas = new Rota();
    include "../App/Views/footer.php";
   // $rotas->url();
    ?>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>