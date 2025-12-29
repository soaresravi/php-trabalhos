<?php

include "conexao.php";

$key = "ludmilla";
$api_key = $_POST["api_key"];
echo $api_key;

if ($api_key == $key) {

    $sensor = $_POST["sensor"];
    $local1 = $_POST["local1"];
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    date_default_timezone_set('America/Bahia');
    $datahora = date('Y-m-d H:i:s');

    try {

        if ($sensor == "DHT11") {
            
            $stmt = $conn->prepare("INSERT INTO clima (temperatura, umidade, datahora) VALUES (:temp, :umid, :datahora)");
            $stmt->execute([
                ':temp' => $valor1,
                ':umid' => $valor2,
                ':datahora' => $datahora
            ]);

        } else if ($sensor == "PIR") {
           
            $stmt = $conn->prepare("INSERT INTO seguranca (local1, sensor, datahora) VALUES (:local1, :sensor, :datahora)");
            $stmt->execute([
                ':local1' => $local1,
                ':sensor' => $sensor,
                ':datahora' => $datahora
            ]);
        }

        if ($stmt->rowCount() == 1) {
            echo "Ok";
        } else {
            echo "Erro ao gravar";
        }

        $con = null;

    } catch (PDOException $error) {
        echo "Erro: " . $error->getMessage();
    }

} else {
    echo "A chave da aplicação é inválida";
}

?>