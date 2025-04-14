    <footer>
      <h3>Envie sua mensagem:</h3>
      <p>Sugestões de melhorias, reportar erros ou compartilhar dúvidas.</p>
      <div>
        <form action="server_post.php" method="post">
            <label for="nome">Nome:</label> 
            <input type="text" name="nome" id="nome">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" rows="15"></textarea> 
    
            <input type="submit" value="ENVIAR">
        </form>
      </div>
    </footer>
  </body>
</html>