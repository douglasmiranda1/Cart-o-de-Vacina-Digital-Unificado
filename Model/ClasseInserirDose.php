<?php
require ("Conexao.php");
class InserirDose{
    private $codRegistro;
    private $rgPaciente;
    private $nomeAplicador;
    private $dataAplicacao;
    private $nomeVacina;
    private $lote;
    private $dose;

    public function __construct($rgPaciente, $nomeAplicador, $dataAplicacao, $nomeVacina, $lote, $dose ){ 
        $this->rgPaciente=$rgPaciente;
        $this->nomeAplicador=$nomeAplicador;
        $this->dataAplicacao=$dataAplicacao;
        $this->nomeVacina=$nomeVacina;
        $this->lote=$lote;
        $this->dose=$dose;
    }

    //-----------SETTERS---------------------------------------------
    public function setCodRegistro($codRegistro){
        $this->codRegistro=$codRegistro;
    }
    public function setRgPaciente($rgPaciente){
        $this->rgPaciente=$rgPaciente;
    }
    public function setNomeAplicador($nomeAplicador){
        $this->nomeAplicador=$nomeAplicador;
    }
    public function setDataAplicacao($dataAplicacao){
        $this->dataAplicacao=$dataAplicacao;
    }
    public function setNomeVacina($nomeVacina){
        $this->nomeVacina=$nomeVacina;
    }
    public function setLote($lote){
        $this->lote=$lote;
    }
    public function setDose($dose){
        $this->dose=$dose;
    }

    //-----------GETTERS---------------------------------------------
    public function getCodRegistro(){
        return $this->codRegistro;
    }
    public function getrgPaciente(){
        return $this->rgPaciente;
    }
    public function getNomeAplicador(){
        return $this->nomeAplicador;
    }
    public function getDataAplicacao(){
        return $this->dataAplicacao;
    }
    public function getNomeVacina(){
        return $this->nomeVacina;
    }
    public function getLote(){
        return $this->lote;
    }
    public function getDose(){
        return $this->dose;
    }

}
?> 