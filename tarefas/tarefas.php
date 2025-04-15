<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicativo de Estudos Interativo</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #444;
        }
        header {
            background: linear-gradient(90deg, #6a0dad, #8a2be2);
            color: white;
            padding: 10px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            background-color: #6a0dad;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1001;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffd700;
        }
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .section {
            padding: 20px 0;
        }
        .section h2 {
            color: #6a0dad;
            font-size: 2em;
        }
        .section p {
            line-height: 1.8;
            font-size: 1.1em;
        }
        .section ul {
            list-style: none;
            padding: 0;
        }
        .section ul li {
            background: url('https://img.icons8.com/ios-filled/50/6a0dad/checkmark.png') no-repeat left center;
            padding-left: 40px;
            margin: 10px 0;
            font-size: 1.1em;
        }
        .button {
            display: inline-block;
            background-color: #6a0dad;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .button:hover {
            background-color: #7b1fa2;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTgzODV8MHwxfGFsbHwxfHx8fHx8fHwxNjM3MTA1ODU3&ixlib=rb-1.2.1&q=80&w=1080') center center / cover;
            color: white;
            text-align: center;
            padding: 80px 20px;
            border-radius: 10px;
        }
        .hero h2 {
            font-size: 3em;
            margin: 0 0 20px 0;
        }
        .hero p {
            font-size: 1.5em;
            margin: 0 0 30px 0;
        }
        .img-responsive {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .code-link {
            margin-top: 20px;
        }
        .log-box {
            background-color: #f3f3f3;
            border-left: 4px solid #6a0dad;
            padding: 10px;
            margin: 20px 0;
            font-family: monospace;
            color: #333;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Aplicativo de Estudos Interativo</h1>
    </header>

    <nav>
        <a href="#sobre">Sobre</a>
        <a href="#processo-construtivo">Processo Construtivo</a>
        <a href="#arquitetura-mvc">Arquitetura MVC</a>
        <a href="#funcionamento">Funcionamento</a>
        <a href="#codigo-fonte">Códigos Fonte</a>
    </nav>

    <div class="container hero">
        <h2>Aprendizado Personalizado e Eficiente</h2>
        <p>Transforme sua rotina de estudos com nosso aplicativo interativo, superando os limites do aprendizado tradicional.</p>
        <a href="#sobre" class="button">Saiba Mais</a>
    </div>

    <div id="sobre" class="container section">
        <h2>1. Problema de Pesquisa</h2>
        <p>O projeto visa solucionar a falta de personalização e eficiência nos métodos de aprendizado digital. Muitos aplicativos existentes, como Duolingo e Anki, possuem limitações em aspectos como motivação, personalização do conteúdo e colaboração entre usuários. Nosso aplicativo tem como objetivo proporcionar um aprendizado mais interativo e adaptado às necessidades individuais dos usuários.</p>
    </div>

    <div id="processo-construtivo" class="container section">
        <h2>2. Processo Construtivo</h2>
        <p>Durante o desenvolvimento, o projeto seguiu uma abordagem iterativa, com ciclos de teste e melhoria contínuos. Abaixo, são apresentados prints, logs e relatos sobre as principais etapas:</p>
        <div class="img-gallery">
            <img src="print1.png" alt="Print do Desenvolvimento" class="img-responsive">
            <p>Figura 1: Interface de criação de perguntas personalizadas.</p>
            <img src="print2.png" alt="Print do Log" class="img-responsive">
            <p>Figura 2: Logs de execução das funcionalidades de repetição espaçada.</p>
        </div>
        <div class="log-box">
            <p>[INFO] Iniciando módulo de repetição espaçada...</p>
            <p>[DEBUG] Tempo de intervalo entre repetições ajustado para 24 horas.</p>
            <p>[ERROR] Erro ao carregar dados do usuário. Tentando novamente...</p>
            <p>[INFO] Módulo de gamificação carregado com sucesso.</p>
        </div>
        <p>O processo incluiu o desenvolvimento de um sistema de backend para gerenciamento de dados, testes de usabilidade e ajustes para melhorar a experiência do usuário.</p>
    </div>

    <div id="arquitetura-mvc" class="container section">
        <h2>3. Arquitetura MVC</h2>
        <p>O projeto foi desenvolvido utilizando a arquitetura MVC (Model-View-Controller) para separar responsabilidades:</p>
        <ul>
            <li><strong>Model:</strong> Responsável pela lógica de dados, incluindo o gerenciamento de usuários, perguntas e respostas.</li>
            <li><strong>View:</strong> Interface gráfica que permite a interação do usuário com o sistema, construída com HTML, CSS e JavaScript.</li>
            <li><strong>Controller:</strong> Intermediário que lida com as requisições do usuário, processa as regras de negócio e atualiza a View.</li>
        </ul>
    </div>

    <div id="funcionamento" class="container section">
        <h2>4. Funcionamento da Aplicação</h2>
        <p>O aplicativo permite que os usuários criem perguntas personalizadas e organizem suas rotinas de estudos. As funcionalidades principais incluem:</p>
        <ul>
            <li>Criação e edição de perguntas em formatos variados (múltipla escolha, dissertativas, etc.).</li>
            <li>Gerenciamento de rotinas de estudo com sugestões baseadas em repetição espaçada.</li>
            <li>Gamificação com recompensas para incentivar o progresso e a prática contínua.</li>
            <li>Estudo em grupo, permitindo a colaboração e o compartilhamento de materiais.</li>
            <li>Feedback contínuo para melhorar o desempenho ao longo do tempo.</li>
        </ul>
    </div>

    <div id="codigo-fonte" class="container section code-link">
        <h2>5. Acesso aos Códigos Fonte</h2>
        <p>O código-fonte completo do projeto está disponível no GitHub. Você pode acessar os repositórios através do link abaixo:</p>
        <a href="https://github.com/seu-usuario/seu-projeto" class="button">Ver Código no GitHub</a>
    </div>

    <footer>
        <p>&copy; 2024 Aplicativo de Estudos Interativo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
