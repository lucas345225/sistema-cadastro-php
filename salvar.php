<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro";

// conexão
$conn = new mysqli($host, $user, $pass, $db);

// verificar erro
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// pegar dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// inserir no banco
$sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();

?>