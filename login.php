<?php include 'header.php'; ?>
    <form action="server_select.php" method="post">
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email">

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Entrar">

    </form>

    <a href="forget_password.php">Esqueceu a senha!</a>
    <p>Nâo possui uma conta? <a href="register.php">CADASTRE-SE</a></p>.
<?php include 'footer.php'; ?>