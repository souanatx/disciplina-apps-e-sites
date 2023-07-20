<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 4 - Ana Teixeira</title>
</head>
<body>	

<!-- Exercício 1:
Elabore um algoritmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a multiplicação entre B e D.
a) Verifique se o resultado da soma é maior, menor ou igual ao da multiplicação, mostrando no browser as mensagens: "A+C é maior que B*D", "A+C é menor que B*D", "A+C é igual a B*D".-->
<h1><b>Exercício 1</b></h1>
<form action="" method="post">
	<label for="a">Valor de A:</label>
	<input type="number" name="a" required><br />
	
	<label for="b">Valor de B:</label>
	<input type="number" name="b" required><br />

	<label for="c">Valor de C:</label>
	<input type="number" name="c" required><br />

	<label for="d">Valor de D:</label>
	<input type="number" name="d" required><br />

	<button type="submit">Calcular</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    
    $soma = $a + $c;
    $mult = $b * $d;
    
    if ($soma > $mult) {
        echo "<p>A+C é maior que B*D</p>";
    } else if ($soma < $mult) {
        echo "<p>A+C é menor que B*D</p>";
    } else {
        echo "<p>A+C é igual a B*D</p>";
    }
}
?>


<!-- Exercício 2:
Crie um algoritmo utilizando uma função com dois argumentos (nome e idade), e exiba no browser o nome e idade de três pessoas, p. ex: “O João tem 25 anos”.
 -->
<h1><b>Exercício 2</b></h1>
<?php 
function exibirNomeIdade($nome, $idade) {
    echo "O $nome tem $idade anos. <br>";
}
exibirNomeIdade("João", 25);
exibirNomeIdade("Maria", 30);
exibirNomeIdade("Pedro", 40);
?>


<!-- Exercício 3:
Realize um algoritmo que crie uma função que calcule o valor do IVA (23%), a partir de um preço introduzido, devolvendo o valor total.
Nota: os dados serão inseridos pelo utilizador
-->
<h1><b>Exercício 3</b></h1>
<form action="" method="post">
	<label for="preco">Preço:</label>
	<input type="number" name="preco" step="0.01" required><br>

	<button type="submit">Calcular IVA</button>
</form>
<?php 
function calcularIva($preco) {
    $iva = $preco * 0.23;
    $total = $preco + $iva; 
    return $total; 
}
$preco = $_POST["preco"];
$total = calcularIva($preco);
echo "O valor total, com IVA, é de: " . $total;
?>


</body>
</html>