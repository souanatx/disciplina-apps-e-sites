<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 4 - Ana Teixeira</title>
<style>
.erro{
  color: red;
}
</style>
</head>
<body>	

<!-- Exercício 4:
Utilize o formulário de contacto em HTML, disponibilizado no Moodle, e utilize o método mais seguro para envio da informação, usando um ficheiro PHP para o efeito. Utilize o ficheiro de PHP criado para o
tratamento dos dados enviados pelo formulário para imprimir toda a informação no browser.
a) Use o elemento “combobox” no campo “Selecione uma opção:” tendo as seguintes opções:
Iniciação, Intermédio e Avançado.
-->
<h1><b>Exercício 4</b></h1>
<form action="" method="post">
	<table width="400" border="0">
    <tbody>
      <tr>
        <td><b>Nome:</b></td>
        <td><input type="text" name="nome"></td>
      </tr>
      <tr>
        <td><b>Email:</b></td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td><b>Telefone</b>: </td>
        <td><input type="text" name="telefone"></td>
      </tr>
      <tr>
        <td><b>Cursos de Informática:</b></td>
        <td><input type="radio" name="cursos"  value="Android">
Android<br>
<input type="radio" name="cursos"  value="HTML">
HTML<br>
<input type="radio" name="cursos"  value="Java">
Java<br>
<input type="radio" name="cursos"  value="PHP">
PHP<br>
<input type="radio" name="cursos"  value="Python">
Python<br>
<input type="radio" name="cursos"  value="SQL">
SQL<br>
<input type="radio" name="cursos"  value="Scratch">
Scratch</td>
      </tr>
      <tr>
        <td><b>Selecione uma opção:</b></td>
        <td><select name="opcao" id="opcao">
          <option value="selecione">--Selecione--</option>
          <option value="Iniciação">Iniciação</option>
          <option value="Intermédio">Intermédio</option>
          <option value="Avançado">Avançado</option>
        </select></td>
      </tr>
      <tr>
        <td><b>Observações:</b></td>
        <td><textarea rows="4" cols="50" name="observacoes">
        </textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="reset" value="Limpar">
        <input type="submit" value="Enviar"></td>
      </tr>
    </tbody>
  </table>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $cursos = $_POST["cursos"];
  $opcao = $_POST["opcao"];
  $observacoes = $_POST["observacoes"];
  if (empty($nome)) {
    $nomeErro = "O campo nome é obrigatório.";
  } else {
    $nome;
  }
  if (empty($nomeErro)) {
    echo "<h2>Dados submetidos com sucesso:</h2>";
    echo "<p>Nome: " . $nome . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Telefone: " . $telefone . "</p>";
    echo "<p>Cursos: " . $cursos . "</p>";
    echo "<p>Opção selecionada: " . $opcao . "</p>";
    echo "<p>Observações: " . $observacoes . "</p>";
  } else {
        echo "<h2>Erro no envio do formulário:</h2>";
        echo "<p class='erro'>" . $nomeErro . "</p>";
  }
}
?>


</body>
</html>