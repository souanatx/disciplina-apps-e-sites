<?php

require_once 'ligacaoBD.php';

session_start();

$_SESSION["sessionmaxtime"]=time();

$con=ligaBD();

if ($stm=$con->prepare("Select * from utilizadores where nome_utilizador=? and palavra_chave=? "))
{
	$stm->bind_param("ss", $_POST["utilizador"],$_POST["password"]);
	$stm->execute();
	
	$stm->store_result();
	
	if($stm->num_rows>0)	{
		$_SESSION["login"]=1;
		$_SESSION["browser"]= $_SERVER["HTTP_USER_AGENT"];
		header("Location:index.php");
		
		
	}else{		
	echo "Os dados não são válidos. Aguarde....";
	header ("Refresh:3; url=Login.php");
	}
	
}
?>