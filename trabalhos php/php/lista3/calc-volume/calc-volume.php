<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Volume calculation </title>
</head>

<body>
    <?php

    $height = $_POST['height']; //foi chamado utilizando o método post, então a variável height é = ao campo height do formulario que foi coisado pelo post
    $lenght = $_POST['lenght'];
    $width = $_POST['width'];

    echo ("<div class='result'> The packaging volume's ". ($height * $lenght * $width) . "m³</di>");

    ?>
</body>    
</html>    