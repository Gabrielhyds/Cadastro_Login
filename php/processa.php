<?php

$User = $_POST['user'];
$senha = $_POST['password'];
$Error = FALSE;

if(strlen($User)< 5){
    echo "<span style='color:red;'><b>O nome do usuário deve ter mais de 5 caracteres...<br/>Digite novamente!!!</b></span>";
    $Error = TRUE;
}

if(strlen($senha)< 5){
    echo "<span style='color:red;'><b>A senha deve ter mais de 5 caracteres...</br>Digite novamente!!!</b></span>";
    $Error = TRUE;
}
if(!$Error){
    echo "<span style='color:green'>Todos os dados foram digitados corretamente! </span><br/>";
}


?>