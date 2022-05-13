<?php
    require_once "conexao.php";
    $sql = "select * from usuarios order by id_usuario";
    $comando = $banco->prepare($sql);
    $comando ->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar PHP</title>
</head>
<body>
    <h1> LISTAR REGISTROS DE USUÁRIOS DO BD </h1><br>

    <a href="cadastrar.html">Adicionar noovo usuario</a>
    <br></br>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>usuário</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($usuario = $comando->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
             <td><?php echo $usuario["id_usuario"]; ?></td>
             <td><?php echo $usuario["login"]; ?></td>
             <td><?php echo $usuario["senha"]; ?></td>
             <td><a href="editar.php?id_usuario=<?php echo $usuario["id_usuario"]; ?>">Editar - </a> 
             <a href="excluir.php?id_usuario=<?php echo $usuario["id_usuario"]; ?>">Excluir </a> </td>
            </tr> 
         <?php } ?>
        </tbody>    
    </table>
</body>
</html>