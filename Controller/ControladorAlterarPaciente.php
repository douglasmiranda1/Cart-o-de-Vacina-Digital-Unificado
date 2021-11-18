<?php
   session_start();
   require "..\Model\ClasseAlterarPaciente.php";

   $acao =  $_POST["acao"];
   $rg = $_POST["rg"];
 
   $pacientes = new AlterarPaciente($rg);
   $pacientesDAO = new AlterarPacienteDAO();

   if ($acao=="consultar"){
      $pacientes->setRg($_POST["rg"]);
      if ( $pacientes->pesquisar() ){
         $_SESSION["codPaciente"] = $pacientes->getCodPaciente();
         $_SESSION["nome"] = $pacientes->getNome();
         $_SESSION["rg"] = $pacientes->getRg();
         $_SESSION["dataNascimento"] = $pacientes->getDataNascimento();
         $_SESSION["nSus"] = $pacientes->getNSus();
               
         header('Location: ..\View\dist\templates\base\AlterarDadosPaciente.php');
      }   
   }elseif($acao=="AlterarPaciente"){

      $pacientes->setCodPaciente($_POST["codPaciente"]);
      $pacientes->setNome($_POST["nome"]);
      $pacientes->setRg($_POST["rg"]);
      $pacientes->setDataNascimento($_POST["dataNascimento"]);
      $pacientes->setNSus($_POST["nSus"]);
    
      $pacientes->alterar();

      
   }else if ($acao=="consulta1") {
      $pacientesDAO->consulta1($rg);
   }
?>