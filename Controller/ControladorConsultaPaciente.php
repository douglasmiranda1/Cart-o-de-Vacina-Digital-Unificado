<?php
   session_start();
   require ("..\Model\ClasseConsultaPaciente.php");

   $rg = $_POST["rg"];
   $dataNascimento = $_POST["dataNascimento"];
   $acao = $_POST["acao"];
   
   $liv = new consulta($rg, $dataNascimento);
   $livDAO = new consultaDAO();
   
   if ($acao=="consulta1") {
      $livDAO->consulta1($rg, $dataNascimento);
   }
   

?>