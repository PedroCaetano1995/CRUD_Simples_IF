<?php

//importar arquivo
require_once "conexao.php";

$usuario = $_POST["usuario"];
$senha= $_POST["senha"];
//preparar e executar no banco de dados
$sql = "INSERT INTO usuarios(`login`,`senha`) VALUES(:usuario,:senha) ";
$comando = $banco->prepare($sql);
$comando ->bindParam(":usuario", $usuario);
$comando ->bindParam(":senha", $senha);


$comando ->execute();



?>