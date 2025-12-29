<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
    $dia = 6;

    switch ($dia) {
        case ($dia == 1 || $dia == 7):
            echo "Fim de semana";
            break;
        case ($dia >= 2 && $dia <=6):
            echo "Dia útil";
            break;    
        default:
            echo "Resposta inválida";   
            break;
    }
?>
</body>
</html>