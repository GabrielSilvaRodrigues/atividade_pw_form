<?php
    $banco = new PDO('sqlite:database/banco_dados.db');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha =password_hash($_POST['senha'],PASSWORD_DEFAULT);
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO profissional (nm_profissional, email_profissional, telefone_profissional, data_nascimento_profissional, senha_profissional, cpf_profissional, genero_profissional, mensagem_profissional) VALUES (:name, :email, :telefone, :data_nascimento, :senha, :cpf, :genero, :mensagem)";
    $stmt=$banco->prepare($sql);
    $stmt->execute([
        ':name'=>$name,
        ':email'=>$email,
        ':telefone'=>$telefone,
        ':data_nascimento'=>$data_nascimento,
        ':senha'=>$senha,
        ':cpf'=>$cpf,
        ':genero'=>$genero,
        ':mensagem'=>$mensagem
    ]);
        header("Location: login.php");
        exit();
?>