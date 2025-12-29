<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleProduto.css">    
    <title> Salvar produto </title>
</head>

<body>
    
<?php   
    session_start();
    require 'database.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $stmt = $con->prepare("update produtos set nome = ?, descricao = ?, preco = ? where id = ?"); //prepare a conexão (contra injeção sql e tal) e atualize da tabela produtos todas essas variáveis do id digitado

    $stmt->bind_param("ssdi", $nome, $descricao, $preco, $id); //passando 4 parâmetros tipo string, string, decimal e inteiro
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: alterar-produto.php?sucesso=sucesso"); //ai o url será tal
        exit();
    } else {
        echo "<div style='font-size: 30px;'>Erro ao alterar produto. </div>";
    }

    $stmt->close();
    $con->close();
?>
</body>
</html>
