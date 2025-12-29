<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
    $numero = 5;

    switch ($numero) {
        case ($numero % 3 == 0):
            echo "Divisível por 3";
            break;
        default:
            echo "Não é divisível";   
            break;
    }
?>
</body>
</html>