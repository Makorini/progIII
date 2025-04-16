<?php

require "classes/Autenticador.php";
session_start();
if(isset($_POST)){

    if($_SESSION['autenticador']->Login($_POST)){

        $_SESSION['nome'] = ($_SESSION['autenticador']->Login($_POST))->GetNome();

        if(isset($_POST['lembraremail'])){
            $email = ($_SESSION['autenticador']->Login($_POST))->GetEmail();
            setcookie("email", $email);
        }else{
            setcookie("email", "", (time() - 3600));
        }
        header('Location: dashboard.php');
    }else{
        echo("Verifique seu log-in e tente novamente.");
        echo("\nNão possui conta? <a href='cadastro.php'>Cadastre-se.<a/>");
    };
}