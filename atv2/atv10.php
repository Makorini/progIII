<?php

class BancoDeDados {
    private $conexao;

    public function __construct($bdServidor = 'localhost', $bdUsuario = 'root', $bdSenha = '', $nomeBanco = 'OFICINA') {  // Deixe a senha em branco
        
        try {
            $this->conexao = new PDO("mysql:host=$bdServidor;dbname=$nomeBanco", $bdUsuario, $bdSenha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Garante que erros de SQL sejam lançados
        } catch (PDOException $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }
    }

    public function buscarClientes() {
        
        $consulta = $this->conexao->query("SELECT * FROM CLIENTE");
        return $consulta->fetchAll(PDO::FETCH_ASSOC); 
    }
}

$bd = new BancoDeDados(); 


$clientes = $bd->buscarClientes();

foreach ($clientes as $cliente) {
    var_dump($cliente);  
}
?>

