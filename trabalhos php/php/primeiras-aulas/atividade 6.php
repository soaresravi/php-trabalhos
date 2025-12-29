<?php
$contador = 0;

function incrementa_contador() {
    global $contador;
    $contador++;
}

incrementa_contador();
incrementa_contador();
incrementa_contador();

echo $contador;

?>