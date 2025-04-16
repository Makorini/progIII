<?php

require "classes/Autenticador.php";
session_start();
$_SESSION['autenticador'] = new Autenticador();
if(isset($_POST)){
    if($_SESSION['autenticador']->Registro($_POST)){
        echo("Cadastro bem-sucedido!");
        sleep(3);
        header('Location: login.php');
    }else{
        echo("Este e-mail já está sendo usado.");
        sleep(3);
        header('Location: cadastro.php');
    };
}