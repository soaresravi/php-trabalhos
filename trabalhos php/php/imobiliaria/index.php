<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Busca de imóveis</title>

    <style>
        
        .centro {
            padding: 10px;
        }

        img {
            padding: 15px;
        }

        .form input, .form select, .form button {
            margin: 5px;
        }

        .form {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            padding-left: 18px;
            padding-top: 5%;
            padding-bottom: 30px;
        }

        .form select {
            width: 150px;
        }

        .form button {
            width: auto;
            background-color: #28a745;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .card {
            max-width: 98%;
            border-radius: 8px;
            margin: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 25px;
            color: #333;
        }

        .card-subtitle {
            font-size: 16px;
            color: #777;
        }

        .card-text {
            color: #555;
            font-size: 14px;
            margin-top: 10px;
        }

        .card .price {
            font-size: 22px;
            color: #007bff;
            font-weight: bold;
        }

        .card .details {
            font-size: 14px;
            margin-top: 10px;
        }

        h1 {
            text-align: center;
            padding-top: 40px;
        }

    </style>

</head>

<body>
    <h1>Consultar imóvel</h1> 

    <form class="form" method="post" action="index.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Cidade" aria-label="Cidade" name="cidade">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>

        <select class="form-select ms-2" name="tipo_negocio">
            <option value="Aluguel">Aluguel</option>
            <option value="Venda">Venda</option>
        </select>
    </form>

<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["cidade"])) {
        $cidade = $_POST["cidade"];

        $sql = "SELECT DISTINCT imovel.id, imovel.titulo, imovel.descricao, imovel.metragem, imovel.quartos, imovel.suites, imovel.banheiros, imovel.vagas, imovel.valor, imovel.iptu, imovel.cidade, imovel.bairro, imovel.endereco,
        fotos.imagem FROM imovel 
        LEFT JOIN fotos ON imovel.id = fotos.id_imovel 
        WHERE cidade = :cidade 
        GROUP BY fotos.id_imovel, imovel.id";

        $imovel = $con->prepare($sql);
        $imovel->bindParam(':cidade', $cidade);
        $imovel->execute();

        if ($imovel->rowCount() >= 1) {
            foreach ($imovel as $linha) {
                echo "<div class='centro'>";
                echo "<div class='card' style='width: 100%;'><div class='card-body'>";
                echo "<img align='left' src='fotos/".$linha["id"]."/".$linha["imagem"]."' width='250' height='250'>";
                echo "<h4 class='card-title'>".$linha["titulo"]."</h4>";
                echo "<h5 class='card-subtitle text-muted'>".$linha["bairro"].", ".$linha["cidade"]."</h5><br>";
                echo "<h6 class='card-subtitle text-muted'>".htmlspecialchars($linha["metragem"])." m²&nbsp;&nbsp;&nbsp;".$linha["quartos"]." quarto(s)&nbsp;&nbsp;&nbsp;".$linha["suites"]." suíte(s)&nbsp;&nbsp;&nbsp;".$linha["banheiros"]." banheiro(s)&nbsp;&nbsp;&nbsp;".$linha["vagas"]." vaga(s)</h6>";
                echo "<p class='card-text'>".$linha["descricao"]."</p>";
                echo "<h4 class='card-title '>R$ ".number_format($linha["valor"], 2, ",", ".")."</h4>";
                echo "</div></div></div>";
            }

        } else {
            echo "<script>alert('Dados não encontrados');</script>";
        }

    } else {
        $sql = "SELECT DISTINCT imovel.id, imovel.titulo, imovel.descricao, imovel.metragem, imovel.quartos, imovel.suites, imovel.banheiros, imovel.vagas, imovel.valor, imovel.iptu, imovel.cidade, imovel.bairro, imovel.endereco,
        fotos.imagem FROM imovel 
        LEFT JOIN fotos ON imovel.id = fotos.id_imovel 
        GROUP BY fotos.id_imovel, imovel.id";

        $imovel = $con->prepare($sql);
        $imovel->execute();

        if ($imovel->rowCount() >= 1) {

            foreach ($imovel as $linha) {
                echo "<div class='centro'>";
                echo "<div class='card' style='width: 100%;'><div class='card-body'>";
                echo "<img align='left' src='fotos/".$linha["id"]."/".$linha["imagem"]."' width='250' height='250'>";
                echo "<h4 class='card-title'>".$linha["titulo"]."</h4>";
                echo "<h5 class='card-subtitle text-muted'>".$linha["bairro"].", ".$linha["cidade"]."</h5><br>";
                echo "<h6 class='card-subtitle text-muted'>".htmlspecialchars($linha["metragem"])." m²&nbsp;&nbsp;&nbsp;".$linha["quartos"]." quarto(s)&nbsp;&nbsp;&nbsp;".$linha["suites"]." suíte(s)&nbsp;&nbsp;&nbsp;".$linha["banheiros"]." banheiro(s)&nbsp;&nbsp;&nbsp;".$linha["vagas"]." vaga(s)</h6>";
                echo "<p class='card-text'>".$linha["descricao"]."</p><br><br><br>";
                echo "<h4 class='card-title '>R$ ".number_format($linha["valor"], 2, ",", ".")."</h4>";
                echo "</div></div></div>";
            }

        } else {
            echo "<script>alert('Dados não encontrados');</script>";
        }
    }
}
?>

</body>
</html>