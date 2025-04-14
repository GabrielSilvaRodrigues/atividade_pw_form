<?php include 'header.php'; ?>
    <form action="user_type.php" method="post">
        <label for="user_type">Registrar-se como: </label>
        <label for="user_type">
        <input type="radio" name="user_type" value="profissonal" required>profissional</label>
        <label for="user_type">
        <input type="radio" name="user_type" value="user">cliente</label>
        <input type="submit" value="Confirmar">
    </form>
    Já possui cadastro? Faça <a href="login.php">Login</a>!
<?php include 'footer.php'; ?>