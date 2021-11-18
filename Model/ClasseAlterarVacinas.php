<?php
require "ClasseAlterarVacinasDAO.php";
class AlterarVacinas{
    private $codigo;
    private $nome;
    private $fabricante;
    private $numeracao;
    private $tipo;
    private $ndoses;
    private $eficacia;

    public function __construct($codigo){ 
        $this->codigo=$codigo;
    }
    //-----------FUNCTIONS ESPECIALS---------------------------------------------
    public function pesquisar(){
        $vacinaAlt = new AlterarVacinasDAO();
        return $vacinaAlt->pesquisar($this);   
    }
    public function alterar(){
        $vacinaAlt = new AlterarVacinasDAO();
        return $vacinaAlt->alterar($this);

    }
    //-----------SETTERS---------------------------------------------
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setFabricante($fabricante){
        $this->fabricante=$fabricante;
    }
    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    public function setNdoses($ndoses){
        $this->ndoses=$ndoses;
    }
    public function setEficacia($eficacia){
        $this->eficacia=$eficacia;
    }

    //-----------GETTERS---------------------------------------------
    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getFabricante(){
        return $this->fabricante;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getNdoses(){
        return $this->ndoses;
    }
    public function getEficacia(){
        return $this->eficacia;
    }
}
?>