<?php
   session_start();
   require ("..\Model\ClassePaciente.php");
   require ("..\Model\ClassePacienteDAO.php");

   $nome = $_POST["nome"];
   $rg = $_POST["rg"];
   $dataNascimento = $_POST["dataNascimento"];
   $nSus = $_POST["nSus"];
   $acao = $_POST["acao"];

   $liv = new Paciente($nome, $rg, $dataNascimento, $nSus);
   $livDAO = new PacienteDAO();


   if ($acao=="incluir"){ 
      $livDAO->incluir($liv);
      header('Location: ..\View\dist\templates\base\Principal.php');
   }
?>