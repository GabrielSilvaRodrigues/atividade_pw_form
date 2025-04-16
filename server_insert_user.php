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

    $sql = "INSERT INTO usuario (nm_usuario, email_usuario, telefone_usuario, data_nascimento_usuario, senha_usuario, cpf_usuario, genero_usuario, mensagem_usuario) VALUES (:name, :email, :telefone, :data_nascimento, :senha, :cpf, :genero, :mensagem)";
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