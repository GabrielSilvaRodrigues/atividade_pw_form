<?php include 'header.php'; ?>
    <form action="register_server.php" method="post">
        <label for="user_type">Registrar-se como: </label>
        <select id="user_type" name="user_type">
            <option value="user">Cliente</option>
            <option value="profissional">Profissional</option>
            <option value="empresa">Empresa</option>
        </select>
        <input type="submit" value="Confirmar">
    </form>
    Já possui cadastro? Faça <a href="login.php">Login</a>!
<?php include 'footer.php'; ?>