<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 7 - Ana Teixeira</title>
</head>
<body>	

<!-- 1. O projeto a ser desenvolvido terá um tema ao gosto do(a) formando(a): Registo de
Alunos, Oficina automóvel, Biblioteca, entre outros.
2. Deverá criar uma base de dados com os campos necessários, e efetuar a devida
ligação entre os ficheiros.
3. Para que o projeto funcione este será composto com pelo menos (cinco) páginas:
    a. Página de login com sessões,
    b. Página principal para inserção dos dados,
    c. Página de atualização de informação,
    d. Página de eliminação de registo,
    e. Página que mostre todos os registos.
Aspetos que valorizam a aplicação:
- Validação dos dados de entrada.
- Personalização (criatividade) na criação (layout) dos formulários.
-->
<h1><b>Login</b></h1>
<?php

require_once 'bd.php';
session_start(); 

$_SESSION["sessionmaxtime"] = time();

$con =  ligaBD();

if(isset($_SESSION["email"])){ 
    header("location: ProjetoFinal.php"); 
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) == 1){ // Se as informações estiverem corretas
        // Cria uma sessão com o ID do cliente
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id_cliente"] = $row["id_cliente"];
        $_SESSION["email"] = $row["email"];
        
        // Redireciona para a página principal
        header("location: reservas.php");
        exit();
    } else { // Se as informações estiverem incorretas
        echo "E-mail ou senha inválidos";
    }
}    
?>

<form method="post" action="">
    <label>E-mail:</label>
    <input type="email" name="email" required><br><br>
    <label>Senha:</label>
    <input type="password" name="senha" required><br><br>
    <input type="submit" value="Entrar">
  </form>
</body>
</html>