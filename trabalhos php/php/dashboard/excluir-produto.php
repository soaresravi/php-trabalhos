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
        <form action="excluir-produto-sql.php" method="post">
            <h1> Excluir produto </h1>

            <div class="input-box">
                <label for="id"> ID do produto: </label>
                <input type="text" id="id" name="id" required>
            </div>

            <button type="submit" class="button-save"> Buscar </button>
        </form>

        <?php
        if (isset($_GET['sucess']) && $_GET['sucess'] == 'sucesso') { 
            echo "<div style='color: white; font-family: Poppins, sans-serif; font-size: 20px; text-align: center; padding: 15px; font-weight: bold'
            >Produto excluído com sucesso!</div>"; 
        } else if (isset($_GET['sucess']) && $_GET['sucess'] == 'erro'){
            echo "<div style='color: white; font-family: Poppins, sans-serif; font-size: 20px; text-align: center; padding: 15px; font-weight: bold
            '>Erro ao excluir produto ou produto não encontrado.</div>"; 
        }
        ?>
    </div>
</body>
</html>