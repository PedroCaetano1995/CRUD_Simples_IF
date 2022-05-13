<?php
    require_once "conexao.php";
    
    if(isset($_GET['id_usuario'])){
        $sql = "select * from usuarios where id_usuario = :id";
        $comando = $banco ->prepare($sql);
        $comando -> bindValue(":id", $_GET['id_usuario']);
        $comando -> execute();
        $idusuario = $comando -> fetch();
        //echo "OK";

    } else {
        header("Location: listar.php");
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuario no BD por formulário simples</h1>
    <form method="POST" action="proc_editar.php">
        <label for="login">Usuario</label>
        <input type="text" name="usuario" value="<?php echo $idusuario["login"];?>"/>

        <label for="senha">Senha</label>
        <input type="text" name="senha" value="<?php echo $idusuario["senha"];?>"/>
        <br>
        <input type="hidden" name="id_usuario" value="<?php echo $idusuario["id_usuario"];?>"/>
        
        
        <input type="submit" value="Editar">

    </form>
</body>
</html>