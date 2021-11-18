<?php
    require "ClasseAlterarRegistroAplicadorDAO.php";
    class AlterarRegistroAplicador{
        private $codRegistro;
        private $rgPaciente;
        private $nomeAplicador;
        private $dataAplicacao;
        private $nomeVacina;
        private $lote;
        private $dose;
        //-----------CONSTRUCT-------------------------------------------------------
        public function __construct($codRegistro){ 
            $this->codRegistro=$codRegistro;
        }
        //-----------FUNCTIONS ESPECIALS---------------------------------------------
        public function pesquisar(){
            $registroAlt = new AlterarRegistroAplicadorDAO();
            return $registroAlt->pesquisar($this);   
        }
        public function alterar(){
            $registroAlt = new AlterarRegistroAplicadorDAO();
            return $registroAlt->alterar($this);
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
        public function getDose(){
            return $this->dose;
        }
    }
?>