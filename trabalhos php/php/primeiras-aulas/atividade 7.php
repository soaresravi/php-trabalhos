<?php
$mensagem = "Olá mundo";

function exiba_a_mensagem() {
    global $mensagem;
    $mensagem++;
}

exiba_a_mensagem();

echo $mensagem;

?>