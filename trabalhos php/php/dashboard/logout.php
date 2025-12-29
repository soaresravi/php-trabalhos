<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Logout </title>
</head>

<body>
    <?php
    session_start(); //começa a sessão
    session_unset(); //apaga todos os dados mas mantém ativa
    session_destroy(); //destrói completamente
    header('Location: index.php'); //redireciona pro login
    exit(); //fecha
    ?>
</body>
<html>