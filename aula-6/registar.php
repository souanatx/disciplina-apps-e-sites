<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 7 - Ana Teixeira</title>
</head>
<body>
<h1>Registo de Clientes</h1>
<?php
require_once 'bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $con = ligaBD();
    
    $sql = "INSERT INTO clientes (nome, apelido, email, senha) VALUES ('$nome', '$apelido', '$email', '$senha')";
    
    if (mysqli_query($con, $sql)) {
        echo "Registo criado com sucesso.";
    } else {
        echo "Erro ao criar registo: " . mysqli_error($con);
    }
    
    mysqli_close($con);
}

?>
<form method="post" action="">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>
    <label>Apelido:</label>
    <input type="text" name="apelido" required><br><br>
    <label>E-mail:</label>
    <input type="email" name="email" required><br><br>
    <label>Senha:</label>
    <input type="password" name="senha" required><br><br>
    <input type="submit" value="Registar">
</form>
</body>
</html>