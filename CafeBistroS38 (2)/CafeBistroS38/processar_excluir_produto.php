<?php
require_once "conexao.php";

$id = $_POST["id"];
    
    $sql = " DELETE FROM PRODUTOS WHERE id=?";

    $stmt = $conn->prepare($sql);

    if($stmt){

        $stmt->bind_param("i", $id); // Joga o id na interrogação


        if ($stmt->execute()){ 

            $stmt->close();
            $conn->close();

            header("Location: excluir-produto-sucesso.php");
            exit();
        } else {
            // A execução da consulta SQL falhou
            $stmt->close();
            $conn->close();

            header("Location: erro-excluir.php");
            exit();
        }
    }
?>