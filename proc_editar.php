<?php

//importar arquivo
require_once "conexao.php";
//pegar dados do formulario
$usuario = $_POST["usuario"];
$senha= $_POST["senha"];
$id_usuario= $_POST["id_usuario"];

//preparar e executar no banco de dados
$sql = "UPDATE usuarios set `login`=:usuario, senha=:senha where id_usuario =:id";
$comando = $banco->prepare($sql);
$comando ->bindParam(":usuario", $usuario);
$comando ->bindParam(":senha", $senha);
$comando ->bindParam(":id", $id_usuario);
$comando ->execute();
header("Location:listar.php");


?>