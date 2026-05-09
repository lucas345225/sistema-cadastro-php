<?php

$conn = new mysqli("localhost", "root", "", "cadastro");

// deletar
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM usuario WHERE id=$id");
}

$result = $conn->query("SELECT * FROM usuario");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>

    <style>
        body {
            font-family: Arial;
            background: #121212;
            color: white;
            padding: 20px;
        }

        .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            border: 2px solid #00ff88;
            color: #00ff88;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-voltar:hover {
            background: #00ff88;
            color: #121212;
        }

        a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>

<body>

<h2>Usuários cadastrados</h2>

<?php
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Nome: " . $row['nome'] . " | Email: " . $row['email'];
    echo " <a href='?id=".$row['id']."'>[Deletar]</a><br>";
}
?>

<br>
<a href="index.html" class="btn-voltar">⬅ Voltar</a>

</body>
</html>

<?php
$conn->close();
?>