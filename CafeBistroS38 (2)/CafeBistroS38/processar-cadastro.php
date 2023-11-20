<?php
require_once "conexao.php";
// Obter os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmarsenha = $_POST["confirmarsenha"];


    // Inserir os dados na tabela 'usuario'
    $sql = "INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES 
    ('$nome', '$tipo', '$descricao', '$preco, '$imagem)";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastrar-produto-sucesso.php");
        exit();
    } else {
        header("Location: cadastrar-produto.php?erro=2");
        exit();
    }
    $conn->close();
