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

    session_start(); //inicia sessão. usar quando vc pretende armazenar dados de uma página, retornar sessão existente
    require 'database.php'; //inclui a conexão com db

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //se for coisado usando o metodo post...
        $username = $_POST['username']; //variável username será igual ao 'username' que foi digitado no form
        $password = $_POST['password']; //variável password será igual ao 'password' que foi digitado no form

        $stmt = $con->prepare("select * from users where username = ?"); //statement = conexão preparando e ai utiliza o mysql (pegue todas as informações da tabela users quando o suername for x)

        if ($stmt === false) { //$stmt armazena o resultado do prepare. con->prepare se for verdadeiro retorna valor do objeto mysqli_stmt. se for falso...
            die('prepare() failed: ' . htmlspecialchars($con->error)); //die: termina a execução. prepare failed: mensagem fixa indicando que a preparação falhou. htmlsp..: converte caracteres por segurança e mostra o erro dado
        }

        $stmt->bind_param("s", $username); //passando 1 parâmetro tipo string
        $stmt->execute();
        $result = $stmt->get_result(); //resultado = pega o resultado dado pelo stmt após passar o parâmetro

        if ($result->num_rows > 0) { //se afetar o número de linhas do msql...
            $user = $result->fetch_assoc(); //a variável user vai ser = pega (o fetch assoc) o resultado do result

            if ($user['password'] === $password) { //se a senha cadastrada desse user for igual a digitada...
                $_SESSION['username'] = $username; //precisa do session start p usar a session. usar quando precisar manter os dados em várias páginas. armazena na sessão no campo 'username' oq está na variável username
                header('Location: dashboard.php'); //redireciona p página
                exit(); //sai
            } else { 
                header('Location: index.php?error=incorrect');//redireciona pra página de login e adiciona parâmetro de erro, que faz com que apareça aquela mensagem lá que tinha no index
                exit();
            }
        } else {
            header('Location: index.php?error=incorrect');
            exit();
        }
    }    
    ?>
</body>    
</html>   