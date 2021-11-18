<?php
   session_start();
   require ("..\Model\ClasseLogin.php");

   $rg = $_POST["rg"];
   $cpf = $_POST["cpf"];
   $acao = $_POST["acao"];
   
   $liv = new Login($rg, $cpf);
   $livDAO = new LoginDAO();
   
   if ($acao=="login1") {
      $livDAO->login1($rg, $cpf);
   }else if ($acao=="sair") {
      $livDAO->logout();
   }
   

?>