<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Days of the week </title>
</head>

<body>

    <?php

    $number = $_POST['number'];

    if ($number == 1){ 
        echo "<div class='result'> Sunday </div>";
    } else if ($number == 2){ 
        echo "<div class='result'> Monday </div>";
    } else if ($number == 3){ 
        echo "<div class='result'> Tuesday </div>";
    } else if ($number == 4){ 
        echo "<div class='result'> Wednesday </div>";
    } else if ($number == 5){ 
        echo "<div class='result'> Thursday </div>";
    } else if ($number == 6){ 
        echo "<div class='result'> Friday </div>";
    } else if ($number == 7){ 
        echo "<div class='result'> Saturday </div>";
    }
    ?>
</body>
</html> 