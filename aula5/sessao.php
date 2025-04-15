<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];
$email   = $_COOKIE['email_usuario'] ?? 'não lembrado';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bem-Vindo</title>
</head>
<body>
    <h2>Bem-Vindo, <?= $usuario ?>!</h2>
    <p>E-mail lembrado: <?= $email ?></p>

    <a href="logout.php">Sair</a>
</body>
</html>
