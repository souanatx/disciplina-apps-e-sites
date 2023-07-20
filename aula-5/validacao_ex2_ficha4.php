<?php

function validarformulario(){
	$validacao=array();
	if (!isset ($_POST["experiencia"]))
	 $_POST["experiencia"]=" ";
	foreach($_POST as $key => $value)
	if(empty ($_POST[$key]))
	array_push($validacao,$key);
return $validacao;
}


$validacao=array();
 if ($_POST && count ($validacao)==0){

 $con=new Mysqli ("localhost","root","","formacao_php");
 if ($con->connect_error!=0){
	 echo "Ocorreu um erro de acesso à BD;". $con->connect_error;
	 exit;

 }
 $stm=$con -> prepare("insert into formulario values (0,?,?,?,?,?,?,?,?)");

 date_default_timezone_set("Europe/Lisbon");

 $stm -> bind_param("sssssss",$_POST["nome"],date("Y-m-d", strtotime($_POST ["idade"])),$_POST ["nr_documento"],$_POST ["nr_documento"],$_POST ["escolaridade"], $_POST ["estabelecimento"],$_POST ["experiencia"]);
 $stm -> execute();
 header("Location: ex2_ficha42.php");

 }
?>
