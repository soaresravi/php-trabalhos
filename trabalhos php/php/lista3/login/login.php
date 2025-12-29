<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Login </title>
</head>

<body>

    <?php

    $user = $_POST['user'];
    $password = $_POST['password'];

    if ($user == "admin" && $password == 1234){ 
        echo "<div class='result'> Successful login! </div>";
    } else { 
        echo "<div class='result'> Invalid login </div>";
    }
    ?>
</body>    
</html>    