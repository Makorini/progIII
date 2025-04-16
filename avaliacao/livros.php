<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <title>Aplicativo de Estudos</title>
</head>
<body>
    <header>
        <h1>Aplicativo de Estudos</h1>
    </header>

    <nav>
        <a href="#perfil">Perfil</a>
        <a href="#login">Login</a>
        <a href="#cadastro">Cadastro</a>
        <a href="#perguntas">Perguntas</a>
        <a href="#cursos">Cursos</a>
        <a href="#configurações">Configurações</a>
    </nav>

    <div class="container hero">
        <h2 class="perguntas">Cadastro de Curso</h2>
        <form action="#" method="post">
            <label for="nome">Nome do Curso:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="desc">Descrição:</label>
            <textarea id="desc" name="desc" rows="3" required></textarea>

            <label for="area">Área de Conhecimento:</label>
            <input type="text" id="area" name="area" required>

            <label for="qtd">Quantidade de perguntas novas (por dia):</label>
            <input type="number" id="qtd" name="qtd" min="1" required>

            <label for="livros">Livros associados ao curso:</label>
            <textarea id="livros" name="livros" placeholder="Ex: Lógica de Programação - Carlos A. Silva&#10;Estruturas de Dados - Maria F. Souza" rows="4" required></textarea>

            <button type="submit" class="button submit-button">Cadastrar Curso</button>
        </form>
    </div> 
</body>
</html>
