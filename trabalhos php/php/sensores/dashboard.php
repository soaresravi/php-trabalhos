<?php
include "conexao.php";

// Último dado do clima
$stmtClima = $con->query("SELECT * FROM clima ORDER BY datahora DESC LIMIT 1");
$dadoClima = $stmtClima->fetch(PDO::FETCH_ASSOC);

// Último acionamento do PIR
$stmtSeg = $con->query("SELECT * FROM seguranca ORDER BY datahora DESC LIMIT 1");
$dadoSeg = $stmtSeg->fetch(PDO::FETCH_ASSOC);

// Define cor de fundo
$corFundo = $dadoSeg ? "red" : "green";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard ESP32</title>
    <style>
        body {
            background-color: <?= $corFundo ?>;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 40px;
        }
        h1 {
            margin-bottom: 40px;
        }
        .box {
            background-color: rgba(255,255,255,0.1);
            border: 1px solid #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 15px auto;
            width: 300px;
        }
        .box h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1>Dashboard do Monitoramento</h1>

    <div class="box">
        <h2>Clima</h2>
        <?php if ($dadoClima): ?>
            <p><strong>Temperatura:</strong> <?= $dadoClima['temperatura'] ?> °C</p>
            <p><strong>Umidade:</strong> <?= $dadoClima['umidade'] ?> %</p>
            <p><strong>Data/Hora:</strong> <?= $dadoClima['datahora'] ?></p>
        <?php else: ?>
            <p>Sem dados de clima.</p>
        <?php endif; ?>
    </div>

    <div class="box">
        <h2>Sensor de Presença</h2>
        <?php if ($dadoSeg): ?>
            <p><strong>Local:</strong> <?= $dadoSeg['local1'] ?></p>
            <p><strong>Sensor:</strong> <?= $dadoSeg['sensor'] ?></p>
            <p><strong>Data/Hora:</strong> <?= $dadoSeg['datahora'] ?></p>
        <?php else: ?>
            <p>Sem acionamento recente.</p>
        <?php endif; ?>
    </div>
</body>
</html>
