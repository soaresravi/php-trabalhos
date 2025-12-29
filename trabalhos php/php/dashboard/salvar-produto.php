<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">    
    <title> Salvar produto </title>
</head>

<body>
    <?php
    session_start();
    require 'database.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $stmt = $con->prepare("insert into produtos (nome, descricao, preco) values (?, ?, ?)"); //stmt (statement), con (conexão), essa parte ta fazendo igual java (PreparedStatement stm = con.PreparedStatement) e ai incluindo com mysql que nem em java
    $stmt->bind_param("ssd", $nome, $descricao, $preco); //usar bind param quando eu estiver passando declarações preparadas mysql. ta passando 2 parâmetros tipo string, user e senha)
    $stmt->execute(); //executa

    if ($stmt->affected_rows > 0) { //se tiver alterado alguma linha no db...
        header("Location: produto.php?status=sucesso");
        exit();
    } else {
        echo "Erro: " . $con->error;
    }

    $stmt->close(); //fechando o prepared statement
    $con->close(); ////fechando a conexão com db
    ?>
</body>
</html>