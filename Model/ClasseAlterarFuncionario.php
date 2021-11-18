<?php
require "ClasseAlterarFuncionarioDAO.php";
class AlterarFuncionario{
    private $codFuncionario;
    private $nome;
    private $rg;
    private $cpf;
    private $especialidade;
    private $ndoses;
    private $eficacia;

    //-----------FUNCTIONS ESPECIALS---------------------------------------------
    public function pesquisar(){
        $funcionarioAlt = new AlterarFuncionarioDAO();
        return $funcionarioAlt->pesquisar($this);   
    }
    public function alterar(){
        $funcionarioAlt = new AlterarFuncionarioDAO();
        return $funcionarioAlt->alterar($this);
        
    }
    //-----------SETTERS---------------------------------------------
    public function setCodFuncionario($codFuncionario){
        $this->codFuncionario=$codFuncionario;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setRg($rg){
        $this->rg=$rg;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade=$especialidade;
    }

    //-----------GETTERS---------------------------------------------
    public function getCodFuncionario(){
        return $this->codFuncionario;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
   
}
?>