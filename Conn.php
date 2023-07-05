<?php
$hostname = 'localhost';
$username = 'seu_usuario';
$password = 'sua_senha';
$database = 'seu_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "Login bem-sucedido! Bem-vindo, " . $username . "!";
} else {
    // Login falhou
    echo "Usuário ou senha incorretos.";
}

$conn->close();
?>
