<?php
    $server = "localhost"; 
    $banco = "imobiliaria"; 
    $user = "root";        
    $pass = "usbw";         

    try {
        $con = new PDO('mysql:host=' . $server . ';dbname=' . $banco, $user, $pass);
        //echo "Conectado com sucesso!";
        $con->exec("SET NAMES 'utf8mb4'");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo 'Erro: ' . $error->getMessage();
    }
?>
