<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Exercício 6 </title>
    </head>
    <body>
        <?php

            $contador = 0;

            function incrementa_contador() {
                global $contador; //de fora e dentro da função
                $contador++;
            }
            
            incrementa_contador(); //chama a função 3 vezes e conta 3 vezes
            incrementa_contador();
            incrementa_contador();

            echo $contador;
        ?>
    </body>
</html>        