<?php //corrigir os controladores 
   session_start();
   require ("..\Model\ClasseVacina.php");
   require ("..\Model\ClasseVacinaDAO.php");

   //receber os dados da interface
   $acao = $_POST["acao"];
   $nome = $_POST["nome"];
   $fabricante = $_POST["fabricante"];
   $tipo = $_POST["tipo"];
   $ndoses = $_POST["ndoses"];
   $eficacia = $_POST["eficacia"];
   

   $vacinas = new vacinas($nome, $fabricante, $tipo, $ndoses, $eficacia);
   $vacinasDAO = new vacinasDAO();

   if ($acao=="incluir"){ //incluir
      $vacinasDAO->incluir($vacinas);
      header('Location: ..\View\dist\templates\base\Principal.php');
   }else if ($acao=="excluir"){ //excluir
      $codVacina = $_POST["codVacina"];
      $vacinas->setCodVacina($codVacina);
      $vacinasDAO->excluir($vacinas);
   }
   
?>