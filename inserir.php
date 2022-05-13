<?php
    //incluir arquivo de conexao
    require_once "conexao.php";

    //preparar e executar banco de dados
    
    
    $sql = "INSERT INTO usuarios(`login`,`senha`) VALUES('chiquinha', '4321')";
    $comando = $banco->prepare($sql);
    $comando->execute();
?>

