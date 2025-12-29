<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Divisible by 3 </title>
</head>

<body>
<?php
    $number = $_POST['number'];

    switch ($number) {
        case ($number % 3 == 0):
            echo "<div class='result'> Divisível por 3 </div>";
            break;
        default:
            echo "<div class='result'> Não é divisível </div>";   
            break;
    }
?>
</body>
</html>