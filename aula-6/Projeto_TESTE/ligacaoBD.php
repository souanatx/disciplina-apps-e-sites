<?php
function ligaBD(){
	
	$con=new Mysqli("localhost","root","","bd_projeto_final");

if ($con ->connect_errno!=0){
	echo "Ocorreu um erro no acesso à base de dados", $con->connect_error;
	exit;
}
return $con;
	
}