<?php

class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    public function __construct(string $nome, string $email, string $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function Autenticar(string $email, string $senha){
        if($email != $this->email){
            return false;
        }
        if(!password_verify($senha, $this->senha)){
            return false;
        }

        return true;
    }

    public function GetNome(){
        return $this->nome;
    }
    public function GetEmail(){
        return $this->email;
    }
}