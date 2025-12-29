<?php
session_start();
require 'database.php';

$id = $_POST['id'];

$stmt = $con->prepare("select * from produtos where id = ?");

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $produto = $result->fetch_assoc();
} else {
    header("Location: excluir-produto.php?sucess=erro");
    exit();
}

$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleProduto.css">    
    <title> Excluir produto </title>
</head>

<body>
    <div class="wrapper"> 
        <form action="confirmar-exclusao.php" method="post">
            <h1> Excluir produto </h1>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($produto['id']); ?>"> <!-- o campo fica escpndido e utiliza os caracteres especiais para pegar o  valor do id da tabela de produto-->

            <div class="input-box">
                <label for="nome"> Nome do produto: </label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required>
            </div>

            <div class="input-box">
                <label for="descricao"> Descrição: </label>
                <textarea id="descricao" name="descricao" required><?php echo htmlspecialchars($produto['descricao']); ?></textarea> <br> <br>
            </div>

            <br><div class="input-box"> 
                <label for="preco"> Preço: </label>
                <input type="text" id="preco" name="preco" value="<?php echo htmlspecialchars($produto['preco']); ?>" required>
            </div>

            <button type="submit" class="button-save"> Confirmar exclusão </button>           
        </form>    
    </div>    
</body>
</html>