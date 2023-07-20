<h2>ANPRI . Candidatura Espont&acirc;nea</h2>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
	require("validacao_ex2_ficha4.php");
	$validacao=validarformulario();
	}
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<fieldset><legend>Dados pessoais</legend>
<table>
<tbody>
<tr>
<td><label>Nome*:</label></td>
<td><input name="nome" size="45" type="text" value="<?php 
if ($_POST)
	if(!empty($_POST["nome"]))
		echo $_POST["nome"];
?>" /> <?php 
if ($_POST && in_array("nome",$validacao))
	echo "<span class=\"erro\">(Preenchimento obrigatório)</span>";
?></td>
</tr>
<tr>

<td><label>Data de Nascimento*:</label></td>
<td><input name="idade" type="text" value="<?php 
if ($_POST)
	if(!empty($_POST["idade"]))
		echo $_POST["idade"];
?>" /><?php 
if ($_POST && in_array("idade",$validacao))
	echo "<span class=\"erro\">(Preenchimento obrigatório)</span>";
?></td>
</tr>
<tr>
<td><label>Doc. de Identifica&ccedil;&atilde;o*:</label></td>
<td><select name="documento">
<option value="Bilhete de Identidade">Bilhete de Identidade</option>
<option value="Cartão do Cidadão">CC</option>
<option value="Passaporte">Passporte</option>
</select>&nbsp;<input name="nr_documento" type="text" value="<?php 
if ($_POST)
	if(!empty($_POST["nr_documento"]))
		echo $_POST["nr_documento"];
?>" /> <?php 
if ($_POST && in_array("nr_documento",$validacao))
	echo "<span class=\"erro\">(Preenchimento obrigatório)</span>";
?></td>
</tr>
</tbody>
</table>
</fieldset><fieldset><legend>Habilita&ccedil;&otilde;es acad&eacute;micas</legend>
<table>
<tbody>
<tr>
<td><label><label>Escolaridade:</label></label></td>
<td><select name="escolaridade">
<option value="12º Ano">12&ordm; Ano</option>
<option value="Licenciatura">Licenciatura</option>
<option value="Mestrado">Mestrado</option>
<option value="Doutoramento">Doutoramento</option>
</select></td>
<td>Estabelecimento de Ensino:</td>
<td><input name="estabelecimento" type="text" /></td>
</tr>
</tbody>
</table>
</fieldset><fieldset><legend>Experi&ecirc;ncia profissional:</legend> <label>Situa&ccedil;&atilde;o profissional: <input checked="checked" name="experiencia" type="radio" value="Sem experiência" <?php 
if ($_POST)
	if($_POST["experiencia"]=="Sem experiência")
		echo "checked";
?>" /> Sem experi&ecirc;ncia <input name="experiencia" type="radio" value="Inferior a 5 anos" <?php 
if ($_POST)
	if($_POST["experiencia"]=="Inferior a 5 anos")
		echo "checked";
?> /> Inferior a 5 anos <input name="experiencia" type="radio" value="+ de 5 anos"<?php 
if ($_POST)
	if($_POST["experiencia"]=="+ de 5 anos")
		echo "checked";
?> /> + de 5 anos </label></fieldset>
<p>* campos obrigat&oacute;rios</p>
<p><input name="enviar" type="submit" value="Submeter candidatura" /></p>
<p><input type="reset" value="Limpar"/></p>

</form>

<?php

// if ($_POST && count ($validacao)==0){
// echo "<b> DADOS DO FORMULÁRIO </b><br/>";
 // echo "<br/>";
 // echo " <b> Nome: </b>" .$_POST["nome"]."<br/>";
 // echo "<br/>";
 // echo " <b> Data de Nascimento: </b>" . $_POST ["idade"]. "<br/>";
 // echo "<br/>";
 // echo " <b> Doc. de Identificação: </b>". $_POST ["nr_documento"]. "<br/>";
 // echo "<br/>";
 // echo " <b> Escolaridade: </b>". $_POST ["escolaridade"]. "<br/>";
 // echo "<br/>";
 // echo " <b> Estabelecimento de ensino: </b>". $_POST ["estabelecimento"]. "<br/>";
 // echo "<br/>";
 // echo " <b> Esperiência Profissional: </b>". $_POST ["experiencia"]. "<br/>";
 	
	
//}
?>



