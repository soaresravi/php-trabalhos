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
            
        $age = $_POST['age'];

        if ($age <= 12) {
            echo "<div class='result'> Chield </div>";
        } else if ($age >= 13 && $age <= 19) {
            echo "<div class='result'> Teenager </div>";
        } else if ($age >= 20 && $age <= 59) {
            echo "<div class='result'> Adult </div>";
        } else if ($age >= 60) {
            echo "<div class='result'> Elderly </div>";
        }

        ?>
</body>
</html>        