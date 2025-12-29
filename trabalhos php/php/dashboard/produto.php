<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleProduto.css">
    <title> Cadastrar produtos </title>
</head>

<body>
    <div class="wrapper">
        <form action="salvar-produto.php" method="post">
            <h1> Cadastrar novo produto </h1>

            <div class="input-box">
                <label for="nome"> Nome do produto: </label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="input-box">
                <label for="descricao"> Descrição: </label>
                <textarea id="descricao" name="descricao"> </textarea> <br> <br>
            </div>

            <br><div class="input-box"> 
                <label for="preco"> Preço: </label>
                <input type="text" id="preco" name="preco" required> <br> <br>
            </div>

            <button type="submit" class="button-save"> Salvar produto </button>
        </form>

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'sucesso') { //se o parâmetro da variável status der sucesso...
            echo "<div style='color: white; font-family: Poppins, sans-serif; font-size: 20px; text-align: center; padding: 20px; font-weight: bold'>Produto adicionado com sucesso!</div>"; 
        }
        ?>
    </div>
</body>
</html>