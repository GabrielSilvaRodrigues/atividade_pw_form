<h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['user_type'];
    if ($tipo == "user") {
        echo "Cliente";
    } elseif ($tipo == "profissional") {
        echo "Profissional";
    } elseif ($tipo == "empresa") {
        echo "Empresa";
    }
}
?>
</h2>
<form action="server_insert_<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['user_type'];
    echo $tipo;
}
?>.php" method="post">
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name">
        
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email">
        
        <label for="telefone" maxlength="15">Telefone: </label>
        <input type="tel" name="telefone" id="telefone">
        
        <label for="data_nascimento">Data de nascimento: </label>
        <input type="date" name="data_nascimento" id="data_nascimento">
        
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf">
        
        <label for="genero">Gênero: </label>
        <label for="f"><input type="radio" name="genero" value="f">Feminino</label>
        <label for="m"><input type="radio" name="genero" value="m">Masculino</label>
        
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        
        <label for="senha_repetida">Repetir senha: </label>
        <input type="password" name="senha_repetida" id="senha_repetida">
        
        <label for="mensagem">Mensagem: </label>
        <textarea name="mensagem" id="mensagem" maxlength="200" rows="15" cols="25" required></textarea>
        <input type="submit" value="Enviar">
</form>
<p> Já possui cadastro? <a href="login.php">ENTRE</a>!</p>
