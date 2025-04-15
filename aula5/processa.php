<?php
session_start();

// validacao basica
$nome    = htmlspecialchars($_POST['nome']);
$email   = filter_input(INPUT_POST, 'email'); 
$senha   = $_POST['senha'];
$lembrar = isset($_POST['lembrar']);

if (!$email) {
    echo "E-mail inválido.";
    exit;
}

// Armazenar nome na sessao
$_SESSION['usuario'] = $nome;

//criar cookie quando marcado
if ($lembrar) {
    setcookie("email_usuario", $email, time() +3600); //1hora
}

// Redireciona para página com sessao
header("location: sessao.php");
exit;
?>