<?php
    $server = "localhost"; 
    $banco = "sensores"; 
    $user = "root";        
    $pass = "";         

    try {
        $con = new PDO('mysql:host=' . $server . ';dbname=' . $banco, $user, $pass);
        //echo "Conectado com sucesso!";
    } catch (PDOException $error) {
        echo 'Erro: ' . $error->getMessage();
    }
?>
