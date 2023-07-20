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

$query = "SELECT * FROM reservas";
$result = mysqli_query($conexao, $query);

?>
<h1>Lista de Reservas</h1>
<table>
    <tr>
        <th>Data</th>
        <th>Hora</th>
        <th>Serviço</th>
        <th>Contacto</th>
    </tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['data']; ?></td>
        <td><?php echo $row['hora']; ?></td>
        <td><?php echo $row['servico']; ?></td>
        <td><?php echo $row['contacto']; ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>