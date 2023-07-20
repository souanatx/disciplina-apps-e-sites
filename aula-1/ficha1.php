<?php

/*Exercício 1 - 
Construa um algoritmo/programa em PHP que utilize o operador de adição,tendo em conta as seguintes variáveis: $a =23 e $b =45. 
Qual o valor da soma? Imprima oresultado no browser.
*/
$a = 23;
$b = 45;
$soma = $a + $b;

echo "O resultado é: $soma <br />";

/*Exercício 2 -
Construa um algoritmo/programa em PHP que calcule a média aritmética de trêsnotas (atribua os valores à sua escolha) e exiba o resultado na janela(browser).
Obs. As notas estão armazenadas em variáveis
*/
$nota1 = 10;
$nota2 = 14;
$nota3 = 20;
$soma = $nota1 + $nota2 + $nota3;
$media = $soma / 3;

echo "A média das 3 notas é: " . number_format($media, 2) . "<br />";

/*Exercício 3 -
Construa um algoritmo/programa que consiga imprimir o quociente e o resto da divisão inteira entre duas variáveis (x e y). Atribua os valores às variáveis.
*/
$x = 10;
$y = 20;
$quociente = intdiv($x, $y);
$resto = $x % $y;

echo "O quociente da divisão entre $x e $y é: $quociente <br />";
echo "O resto da divisão entre $x e $y é: $resto <br />";

/*Exercício 4 -
Construa um algoritmo/programa que de acordo com a seguinte compra: 
o João foi à oficina e a reparação do carro é de 78,00€ sem IVA.
Qual o valor de reparação com IVA? Imprima o resultado do valor final no browser
*/
$valorSemIva = 78.00;
$iva = 0.23;
$valorComIva = $valorSemIva + ($valorSemIva * $iva);

echo "O valor da reparação do carro do João com IVA é: " . number_format($valorComIva, 2) . "€ <br />";

?>