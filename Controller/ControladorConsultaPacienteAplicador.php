<?php
   session_start();
   require ("..\Model\ClasseConsultaPacienteAplicador.php");

   $rg = $_POST["rg"];
   $dataNascimento = $_POST["dataNascimento"];
   $acao = $_POST["acao"];
   
   $liv = new consultaAplicador($rg, $dataNascimento);
   $livDAO = new consultaAplicadorDAO();
   
   if ($acao=="consulta1") {
      $livDAO->consulta1($rg, $dataNascimento);
   }
   

?>