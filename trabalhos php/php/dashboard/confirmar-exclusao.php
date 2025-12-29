<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleProduto.css">    
    <title> Confirmar exclusão </title>
</head>
<body>

<?php

session_start();
require 'database.php';

$id = $_POST['id'];

$stmt = $con->prepare("delete from produtos where id = ?"); //delete o registro da tabela produtos o que for igual ao id digitado

$stmt->bind_param("i", $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location: excluir-produto.php?sucess=sucesso");
    exit();
} else {
    echo "<div style='font-size: 30px;'>Erro ao excluir produto. </div>";
}

$stmt->close();
$con->close();

?>

</body>
</html>
