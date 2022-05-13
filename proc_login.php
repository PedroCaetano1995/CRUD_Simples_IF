<?php

    if(isset($_POST["btn_acesso"])){
        require_once "conexao.php";

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        //verificar na base

        $sql = "select * from usuarios where usuarios.login = :login and usuarios.senha = :senha";

        $comando = $banco -> prepare($sql);
        $comando -> bindParam(":login", $usuario);
        $comando -> bindParam(":senha", $senha);
        $comando -> execute();

        if($comando->rowCount()== 1){
            echo "Existe esse usuário em sua base de dados";
        }else{
            echo "Erro! Usuario ou senh incorreta";
        }

    }else{
        header("Location: login.html");
    }


?>