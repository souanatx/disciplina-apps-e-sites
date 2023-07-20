<?php
function ligaBD(){
    $servidor = "localhost";
    $username = "root";
    $password = ""; 
    $nomebd = "projetofinal";
    $con = new Mysqli($servidor, $username, $password, $nomebd);
    if($con->connect_errno>0){
        echo "Ocorreu um erro no acesso à base de dados " . $con->error;
        exit;
    }
    //else
        //echo "Conexão bem-sucedida!";
    return $con;
}