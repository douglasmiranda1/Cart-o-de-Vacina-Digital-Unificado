<?php
require ("Conexao.php");

class funcionario{
    private $nome;
    private $rg;
    private $cpf;
    private $especialidade;
    private $codFuncionario;

    public function __construct($nome, $rg, $cpf, $especialidade){ 
        $this->nome=$nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this ->especialidade = $especialidade;
    }

  
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome= $nome;
    }
    
    public function getRg(){
        return $this->rg;
    }
    public function setRg($rg){
         $this->rg = $rg;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
    public function getCodFuncionario(){
        return $this->codFuncionario;
    }
    public function setCodFuncionario($codFuncionario){
        $this -> codFuncionario = $codFuncionario;
    }
    
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade= $especialidade;
    }
}
?> 