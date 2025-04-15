<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário aula 5</title>
</head>
<body>
    <h2>login</h2>
    <from method="post" action="processa.php">
        <label>Nome:</label><br>
        <label type="text" name="nome" required><br><br>
        <label>E-mail:</label><br>
        <label type="email" name="email" required><br><br>
        <label>Senha:</label><br>
        <label type="password" name="senha" required><br><br>
        <label>Lembra meu E-mail:</label><br>
        <label type="checkbox" name="lembrar" value="1"><br><br>
        <button type="submit">acessar</button>
    </from>
</body>
</html>