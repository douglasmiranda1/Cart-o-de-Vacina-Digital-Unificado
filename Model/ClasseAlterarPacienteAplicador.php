<?php
require "ClasseAlterarPacienteAplicadorDAO.php";
class AlterarPacienteAplicador{
    private $codPaciente;
    private $nome;
    private $rg;
    private $dataNascimento;
    private $nSus;
    private $ndoses;
    private $eficacia;

    public function __construct($rg){ 
        $this->rg=$rg;
    }
    //-----------FUNCTIONS ESPECIALS---------------------------------------------
    public function pesquisar(){
        $pacienteAlt = new AlterarPacienteDAO();
        return $pacienteAlt->pesquisar($this);   
    }
    public function alterar(){
        $pacienteAlt = new AlterarPacienteDAO();
        return $pacienteAlt->alterar($this);
        
    }
    //-----------SETTERS---------------------------------------------
    public function setCodPaciente($codPaciente){
        $this->codPaciente=$codPaciente;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setRg($rg){
        $this->rg=$rg;
    }
    public function setDataNascimento($dataNascimento){
        $this->dataNascimento=$dataNascimento;
    }
    public function setNSus($nSus){
        $this->nSus=$nSus;
    }

    //-----------GETTERS---------------------------------------------
    public function getCodPaciente(){
        return $this->codPaciente;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function getNSus(){
        return $this->nSus;
    }
   
}
?>