<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Exercício 7 </title>
    </head>
    <body>
        <?php

            $mensagem = "Olá, mundo";
            
            function exibe_mensagem() {
                global $mensagem;
                echo $mensagem;
            }

            exibe_mensagem();
        ?>
    </body>
</html>        