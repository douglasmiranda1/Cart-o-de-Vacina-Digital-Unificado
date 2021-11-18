<?php //verificado
require ("Conexao.php");

class vacinas{
    private $nome;
    private $fabricante;
    private $tipo;
    private $ndoses;
    private $eficacia;
    private $codVacina;

    public function __construct($nome, $fabricante, $tipo, $ndoses, $eficacia){ 
        $this->nome=$nome;
        $this->fabricante=$fabricante;
        $this->tipo=$tipo;
        $this->ndoses=$ndoses;
        $this->eficacia=$eficacia;
        
    }

  
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome= $nome;
    }
    
    public function getFabricante(){
        return $this->fabricante;
    }
    public function setFabricante($fabricante){
         $this->fabricante = $fabricante;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getNdoses(){
        return $this->ndoses;
    }
    public function setNdoses($ndoses){
        $this -> ndoses = $ndoses;
    }

    public function getEficacia(){
        return $this->eficacia;
    }
    public function setEficacia($eficacia){
        $this -> eficacia = $eficacia;
    }

    public function getCodVacina(){
        return $this -> codVacina;
    }
    public function setCodVacina($codVacina){
        $this->codVacina = $codVacina;
    }

}
?>