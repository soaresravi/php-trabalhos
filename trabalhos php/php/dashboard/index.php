<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Seja bem vindo! </title>
</head>

<body>
    <div class="wrapper">
        <form method="post" action="login.php" autocomplete="on">
            <h1> Login </h1>

            <div class="input-box">
                <input type="text" name="username" id="username" required placeholder="Enter user" autocomplete="name">
                <img src="images/user.png">
            </div>

            <div class="input-box">
                <input type="password" name="password" id="password" required placeholder="Enter password" autocomplete="current-password">
                <img src="images/lock.png"> 
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#"> Forgot password? </a>
            </div>

            <input type="submit" value="Login">
 
            <div class="register-link">
                <p> Don't have an account?
                    <a href="#"> Register </a>
                </p>
            </div>
            
        </form>  
        
        <?php //área de mensagem de erro
        if (isset($_GET['error']) && $_GET['error'] == 'incorrect') { //se o parâmetro error for passado(ex: se o url for index.php?error) e isso for = a incorrect (ex: index.php?error=incorrect)...
            echo '<p> Nome de usuário ou senha incorretos!</p>'; 
        }
        ?>
    </div>
</body>

</html>
