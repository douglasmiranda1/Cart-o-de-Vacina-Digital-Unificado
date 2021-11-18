<?php
require "ClasseVacinasDAO.php";
class Vacinas{
    private $codigo;
    private $nome;
    private $fabricante;
    
    private $tipo;
    private $ndoses;
    private $eficacia;

    //-----------SETTERS---------------------------------------------
    public function __construct($nome, $fabricante, $tipo, $ndoses, $eficacia ){ 
        $this->nome=$nome;
        $this->fabricante=$fabricante;
        $this->tipo=$tipo;
        $this->ndoses=$ndoses;
        $this->eficacia=$eficacia;
    }
    public function pesquisar(){
        $vacinaAlt = new VacinasDAO();
        return $vacinaAlt->pesquisar($this);   
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