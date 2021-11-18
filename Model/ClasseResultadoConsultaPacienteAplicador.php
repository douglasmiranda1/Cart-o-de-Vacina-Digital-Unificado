<?php
require "ClasseResultadoConsultaPacienteAplicadorDAO.php";
class ResultadoConsultaPacienteAplicador{
    private $codRegistro;
    private $rgPaciente;
    private $nomeAplicador;
    private $dataAplicacao;
    private $nomeVacina;
    private $lote;

    //-----------FUNCTIONS ESPECIALS---------------------------------------------
    public function pesquisar(){
        $registroCons = new ResultadoConsultaPacienteAplicadorDAO();
        return $registroCons->pesquisar($this);   
    }
    public function alterar(){
        $registroCons = new ResultadoConsultaPacienteAplicadorDAO();
        return $registroCons->alterar($this);
        
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

    //-----------GETTERS---------------------------------------------
    public function getCodRegistro(){
        return $this->codRegistro;
    }
    public function getRgPaciente(){
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
   
}
?>