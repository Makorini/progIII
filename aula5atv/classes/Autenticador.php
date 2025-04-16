<?php
require "Usuario.php";

class Autenticador{
    public array $usuarios;

    public function __construct(){
        $this->usuarios = [];
    }

    public function Registro($usuario){
        foreach($this->usuarios as $u){
            if($usuario->GetEmail() == $u->GetEmail()){
                return false;
            }
        }

        $usuarionovo = new Usuario($usuario['nome'], $usuario['email'], $usuario['senha']);
        $this->usuarios[] = $usuarionovo;
        return true;
    }
    public function Login($post){
        $email = $post['email'];
        $senha = $post['senha'];
        
        foreach($this->usuarios as $u){
            if($u->Autenticar($email, $senha)){
                return $u;
            }
            return false;
        }
    }
}