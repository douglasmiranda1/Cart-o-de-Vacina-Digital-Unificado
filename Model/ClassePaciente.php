<?php

class Paciente{
    private $codPaciente;
    private $nome;
    private $rg;
    private $dataNascimento;
    private $nSus;

    //-----------SETTERS---------------------------------------------
    public function __construct($nome, $rg, $dataNascimento, $nSus){ 
        $this->nome=$nome;
        $this->rg=$rg;
        $this->dataNascimento=$dataNascimento;
        $this->nSus=$nSus;
    }

    //-----------SETTERS---------------------------------------------
    public function setCodigo($codPaciente){
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
    public function getCodigo(){
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