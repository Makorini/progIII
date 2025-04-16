<form action="processa_cadastro.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Nome" required>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" placeholder="E-mail" required>
    
    <label for="telefone">Telefone</label>
    <input type="tel" id="telefone" name="telefone" required>
    
    <label for="data-nascimento">Data de Nascimento</label>
    <input type="date" id="data-nascimento" name="data-nascimento" required>

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" placeholder="Senha" required>

    <label for="senha2">Confirme a senha</label>
    <input type="password" id="senha2" name="senha2" placeholder="Confirme a senha" required>

    <button type="submit">Cadastrar</button>
</form>
