<?php
require "ClasseLoginDAO.php";
class Login{
    private $codigo;
    private $rg;
    private $cpf;

    public function __construct($rg, $cpf){ 
        $this->rg=$rg;
        $this->cpf=$cpf;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setRg($rg){
        $this->rg=$rg;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getCodigo(){
        return $this->codigo;
    }
}
?>