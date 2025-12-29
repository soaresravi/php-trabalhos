<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Exercício 1 </title>
    </head>
    <body>
        <?php
            
            $idade = 17;

            if ($idade <= 12) {
                echo "Criança";
            } else if ($idade >= 13 && $idade <= 19) {
                echo "Adolescente";
            } else if ($idade >= 20 && $idade <= 59) {
                echo "Adulto";
            } else if ($idade >= 60) {
                echo "Idoso";
            }

        ?>
    </body>
</html>        