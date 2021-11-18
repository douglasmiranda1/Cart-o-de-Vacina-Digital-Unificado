<?php
require "ClasseConsultaPacienteDAO.php";
class Consulta{
    private $codigo;
    private $nome;
    private $rg;
    private $dataNascimento;
    private $nSus;

    public function __construct($rg, $dataNascimento){ 
        $this->rg=$rg;
        $this->dataNascimento=$dataNascimento;
    }

    //-------SETTERS-----------------------------------------
    public function setCodigo($codigo){
        $this->codigo=$codigo;
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
    //-------GETTERS-----------------------------------------
    public function getCodigo(){
        return $this->codigo;
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