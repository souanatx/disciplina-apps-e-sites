<h2>ANPRI . Candidatura Espont&acirc;nea</h2>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<fieldset><legend>Dados pessoais</legend>
<table>
<tbody>
<tr>
<td><label>Nome*:</label></td>
<td><input name="nome" size="45" type="text" /></td>
</tr>
<tr>
<td><label>Data de Nascimento*:</label></td>
<td><input name="idade" type="text" /></td>
</tr>
<tr>
<td><label>Doc. de Identifica&ccedil;&atilde;o*:</label></td>
<td><select name="documento">
<option value="Bilhete de Identidade">Bilhete de Identidade</option>
<option value="Cartão do Cidadão">CC</option>
<option value="Passaporte">Passporte</option>
</select>&nbsp;<input name="nr_documento" type="text" /></td>
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
</fieldset><fieldset><legend>Experi&ecirc;ncia profissional:</legend> <label>Situa&ccedil;&atilde;o profissional: <input checked="checked" name="experiencia" type="radio" value="Sem experiência" /> Sem experi&ecirc;ncia <input name="experiencia" type="radio" value="Inferior a 5 anos" /> Inferior a 5 anos <input name="experiencia" type="radio" value="+ de 5 anos" /> + de 5 anos </label></fieldset>
<p>* campos obrigat&oacute;rios</p>
<p><input name="enviar" type="submit" value="Submeter candidatura" /></p>
</form>
