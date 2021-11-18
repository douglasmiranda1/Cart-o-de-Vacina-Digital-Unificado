<?php 
   session_start();
   require ("..\Model\ClasseInserirDoseAplicador.php");
   require ("..\Model\ClasseInserirDoseAplicadorDAO.php");

   $acao = $_POST["acao"];
   $rgPaciente = $_POST["rgPaciente"];
   $nomeAplicador = $_POST["nomeAplicador"];
   $dataAplicacao = $_POST["dataAplicacao"];
   $nomeVacina = $_POST["nomeVacina"];
   $lote = $_POST["lote"];
   $dose = $_POST["dose"];

   $inserirDose = new InserirDoseAplicador($rgPaciente, $nomeAplicador, $dataAplicacao, $nomeVacina, $lote, $dose);
   $inserirDoseDAO = new InserirDoseAplicadorDAO();

   if ($acao=="incluir"){ //incluir
      $inserirDoseDAO->incluir($inserirDose);
      header('Location: ..\View\dist\templates\base\ResultadoConsultaPacienteAplicador.php');  
   }
?>