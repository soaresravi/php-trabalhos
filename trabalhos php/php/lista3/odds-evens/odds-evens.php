<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Odds or evens? </title>
</head>

<body>
    <?php

    $number = $_POST['number'];

    if ($number % 2 == 0) {
        echo "<div class='result'> The number's even </div>";
    } else {
        echo "<div class='result'> The number's odd </div>";
    }

    ?>

</body>
</html>        