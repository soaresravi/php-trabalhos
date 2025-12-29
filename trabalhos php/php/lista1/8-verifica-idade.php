<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Exercício 8 </title>
    </head>
    <body>
        <?php

            function verifica_idade($idade_minima) { //recebe de parâmetro a variável de idade mínima e ai abaixo ao invés de por idade mínima eu coloco a idade

                $idade = 30;

                if ($idade >= $idade_minima) {
                    echo "Pode entrar!";
                } else {
                    echo "Você não possui idade o suficiente :(";
                }
            }

            verifica_idade(18);
            echo "<br>";
            verifica_idade(25);
        ?>
    </body>
</html>        