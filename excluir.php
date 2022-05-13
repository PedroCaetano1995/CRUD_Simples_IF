<?php
    require_once "conexao.php";

    $idusuario = $_GET["id_usuario"];
    $sql = "DELETE FROM usuarios WHERE id_usuario = :id";
    $comando = $banco -> prepare($sql);
    $comando ->bindValue(":id",$idusuario);
    $comando ->execute();

    header("Location: listar.php");


?>