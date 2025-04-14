<?php include 'header.php'; ?>
    <h2>Profissional</h2>
    <form action="server_insert.php" method="post">
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name">
        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email">
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf">
        <label for="#">Senha: </label>
        <input type="password" name="#" id="#">
        <label for="senha">Repetir senha: </label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Enviar">
    </form>
    Já possui cadastro? <a href="login.php">Entre</a>!
<?php include 'footer.php'; ?>