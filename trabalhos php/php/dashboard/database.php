<?php
$server = "localhost"; //mesma coisa de java
$user = "root";
$password = "usbw";
$database = "sistema_login";

$con = new mysqli($server, $user, $password, $database); //igual a con = DriverManager.getConnection("jdbc:mysql://" + servidor + banco, usuario, senha);

if ($con->connect_error) { //igual a sqlexception error. se der erro na conexão...
    die("Connection failed: " . $con->connect_error); //fecha a conexão e aparece mensagem de erro e mostra o erro dado
}

?>