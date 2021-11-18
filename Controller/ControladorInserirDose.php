<?php 
   session_start();
   require ("..\Model\ClasseInserirDose.php");
   require ("..\Model\ClasseInserirDoseDAO.php");

   $acao = $_POST["acao"];
   $rgPaciente = $_POST["rgPaciente"];
   $nomeAplicador = $_POST["nomeAplicador"];
   $dataAplicacao = $_POST["dataAplicacao"];
   $nomeVacina = $_POST["nomeVacina"];
   $lote = $_POST["lote"];
   $dose = $_POST["dose"];

   $inserirDose = new InserirDose($rgPaciente, $nomeAplicador, $dataAplicacao, $nomeVacina, $lote, $dose);
   $inserirDoseDAO = new InserirDoseDAO();

   if ($acao=="incluir"){ //incluir
      $inserirDoseDAO->incluir($inserirDose);
      header('Location: ..\View\dist\templates\base\ResultadoConsultaPaciente.php');
      
      
   }else if ($acao=="excluir"){ //excluir
      $codVacina = $_POST["codVacina"];
      $inserirDose->setCodVacina($codVacina);
      $inserirDoseDAO->excluir($inserirDose);
   } 
?>