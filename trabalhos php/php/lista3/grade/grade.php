<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Sort age </title>
</head>

<body>
    <?php

    $grade = $_POST['grade'];

    if ($grade >= 6){ 
        echo "<div class='result'> Status: approved </div>";
    } else if ($grade < 4){ 
        echo "<div class='result'> Status: Failed </div> <br>";
    } else if  ($grade >= 4 && $grade < 6){ 
        echo "<div class='result'> You need to take a recovery test </div>";
    }

    ?>
</body>
</html>        