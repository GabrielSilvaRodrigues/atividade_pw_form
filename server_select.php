<?php
    $banco = new PDO('sqlite:database/banco_dados.db');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuario WHERE email_usuario=:email";
    $stmt = $banco->prepare($sql);
    if($stmt){
        $stmt->execute([':email'=>$email]);
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($usuario && password_verify($senha,$usuario[0]['senha_usuario'])){
            $_SESSION['user_id'] = $usuario[0]['id_usuario'];
            $_SESSION['user_email'] = $usuario[0]['email_usuario'];
            header('Location: user_area/user_area.php');
            exit();
        } else{
            $sql = "SELECT * FROM usuario WHERE email_usuario=:email";
            $stmt = $banco->prepare($sql);
            if($stmt){
                $stmt->execute([':email'=>$email]);
                $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($usuario && password_verify($senha,$usuario[0]['senha_usuario'])){
                    $_SESSION['user_id'] = $usuario[0]['id_usuario'];
                    $_SESSION['user_email'] = $usuario[0]['email_usuario'];
                    header('Location: user_area/user_area.php');
                    exit();
                } else{
                    echo "Senha ou usuario incorretos!";
                }
            }
    
        }
    }
?>