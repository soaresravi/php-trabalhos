<?php

if ($nota >= 6){ 
echo "Aluno aprovado";
} elseif ($nota < 4){ 
    echo "Aluno reprovado";
}elseif  ($nota >= 4 && $nota < 6){ 
    echo "Fazer prova de recuperacao";
}
?>