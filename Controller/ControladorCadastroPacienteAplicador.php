<?php
   session_start();
   require ("..\Model\ClassePacienteAplicador.php");
   require ("..\Model\ClassePacienteAplicadorDAO.php");

   $nome = $_POST["nome"];
   $rg = $_POST["rg"];
   $dataNascimento = $_POST["dataNascimento"];
   $nSus = $_POST["nSus"];
   $acao = $_POST["acao"];

   $liv = new PacienteAplicador($nome, $rg, $dataNascimento, $nSus);
   $livDAO = new PacienteAplicadorDAO();


   if ($acao=="incluir"){ 
      $livDAO->incluir($liv);
      header('Location: ..\View\dist\templates\base\ConsultarPacienteAplicador.php');
   }
?>