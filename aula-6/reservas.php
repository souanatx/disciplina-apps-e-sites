<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 7 - Ana Teixeira</title>
</head>
<body>

<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ProjetoFinal.php");
}

include('bd.php');
$conexao = ligaBD();

$msg = '';

if (isset($_POST['submit'])) {
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $servico = $_POST['servico'];
    $contacto = $_POST['contacto'];
    
    $query = "INSERT INTO reservas (data, hora, servico, contacto) VALUES ('$data', '$hora', '$servico', '$contacto')";
    $result = mysqli_query($conexao, $query);
    
    if ($result) {
        $msg = 'Reserva criada com sucesso.';
    } else {
        $msg = 'Erro ao criar reserva. Por favor, tente novamente.';
    }
}
?>

<h1>Agendamento de marcações</h1>

    <p>Preencha o seguinte formulário para guardarmos a sua preferência:</p>

    <p><?php echo $msg; ?></p>

    <form method="POST">
        <label>Data:</label>
        <input type="date" name="data"><br>

        <label>Hora:</label>
        <input type="time" name="hora"><br> 
        
        <label>Serviço:</label>
        <input type="text" name="servico"><br>
        
        <label>Contacto:</label>
        <input type="text" name="contacto"><br>

        <input type="submit" name="submit" value="Marcar">
    </form>
    
    <p>Entraremos em contacto consigo para confirmar o agendamento.</p>
</body>
</html>
    