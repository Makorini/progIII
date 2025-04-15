<?php

// Classe Funcionario: Representa um funcionário
class Funcionario {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

// Classe Departamento, Representa um departamento 
class Departamento {
    private $nome;
    private $funcionarios = []; // Lista de funcionários associados

    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Adiciona um funcionário ao departamento
    public function adicionarFuncionario(Funcionario $funcionario) {
        $this->funcionarios[] = $funcionario;
    }

    // Retorna os nomes dos funcionários
    public function listarFuncionarios() {
        return array_map(fn($func) => $func->getNome(), $this->funcionarios);
    }

    public function getNome() {
        return $this->nome;
    }
}

// Classe Empresa, Representa uma empresa
class Empresa {
    private $nome;
    private $departamentos = []; // Lista de departamentos associados

    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Adiciona um departamento à empresa
    public function adicionarDepartamento(Departamento $departamento) {
        $this->departamentos[] = $departamento;
    }

    // Retorna uma lista de departamentos com seus respectivos funcionários
    public function listarDepartamentos() {
        return array_map(function ($departamento) {
            return [
                'departamento' => $departamento->getNome(),
                'funcionarios' => $departamento->listarFuncionarios()
            ];
        }, $this->departamentos);
    }

    public function getNome() {
        return $this->nome;
    }
}

// Detecta o ambiente para definir a quebra de linha
$isWeb = php_sapi_name() !== 'cli'; // Se for diferente de 'cli', está no navegador
$break = $isWeb ? "<br>" : PHP_EOL;

// ==================== Exemplo de uso ====================

// Criando funcionários
$func1 = new Funcionario("João");
$func2 = new Funcionario("Maria");
$func3 = new Funcionario("Carlos");

// Criando departamentos e adicionar
$departamentoTI = new Departamento("TI");
$departamentoTI->adicionarFuncionario($func1);
$departamentoTI->adicionarFuncionario($func2);

$departamentoRH = new Departamento("RH");
$departamentoRH->adicionarFuncionario($func3);

// Criando empresa e associando
$empresa = new Empresa("Tech Solutions");
$empresa->adicionarDepartamento($departamentoTI);
$empresa->adicionarDepartamento($departamentoRH);

//detalhes da empresa
echo "Empresa: " . $empresa->getNome() . $break . $break;
foreach ($empresa->listarDepartamentos() as $detalhe) {
    echo "Departamento: " . $detalhe['departamento'] . $break;
    echo "Funcionários: " . (empty($detalhe['funcionarios']) 
        ? "Nenhum" 
        : implode(", ", $detalhe['funcionarios'])) . $break;
    echo str_repeat("-", 30) . $break;
}
