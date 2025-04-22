<?php
    $banco = new PDO('sqlite:database/banco_dados.db');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha =password_hash($_POST['senha'],PASSWORD_DEFAULT);
    $cnpj = $_POST['cnpj'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO empresa (nm_empresa, email_empresa, telefone_empresa, senha_empresa, cnpj, mensagem_empresa) VALUES (:name, :email, :telefone, :senha, :cnpj, :mensagem)";
    $stmt=$banco->prepare($sql);
    $stmt->execute([
        ':name'=>$name,
        ':email'=>$email,
        ':telefone'=>$telefone,
        ':senha'=>$senha,
        ':cnpj'=>$cnpj,
        ':mensagem'=>$mensagem
    ]);
        header("Location: login.php");
        exit();
?>