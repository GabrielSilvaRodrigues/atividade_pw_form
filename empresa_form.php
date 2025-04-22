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
        
        <label for="cnpj">CNPJ: </label>
        <input type="text" name="cnpj" id="cnpj">
        
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        
        <label for="senha">Repetir senha: </label>
        <input type="password" name="senha_repetida" id="senha_repetida">
        
        <label for="mensagem">Mensagem: </label>
        <textarea name="mensagem" id="mensagem" maxlength="200" rows="15" cols="25" required></textarea>
        <input type="submit" value="Enviar">
</form>
<p> Já possui cadastro? <a href="login.php">ENTRE</a>!</p>
