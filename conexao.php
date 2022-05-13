<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbnome = "sistema_simples";

    //criando conexao
    $banco = new PDO("mysql:host=localhost;dbname=sistema_simples","root","");
    //$banco = new PDO("mysql:$servidor;$dbnome",$usuario,$senha);
    if($banco){
        echo "Conexão realizada com sucesso!! Parabéns!!";
    }else{
        die("Falha na conexão".mysqli_connect_error());
    }
?>