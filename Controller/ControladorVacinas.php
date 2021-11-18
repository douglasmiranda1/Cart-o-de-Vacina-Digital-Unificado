<?php
   session_start();
   require "..\Model\ClasseVacinas.php";
   

   $acao =  $_POST["acao"];
   $nome = $_SESSION["nome"];
   $fabricante = $_SESSION["fabricante"];
   $tipo = $_SESSION["tipo"];
   $ndoses = $_SESSION["ndoses"];
   $eficacia = $_SESSION["eficiacia"];
   
   $vacinas = new Vacinas($nome,$fabricante,$tipo,$ndoses,$eficacia);
   $vacinasDAO = new VacinasDAO();

   if ($acao=="consultar"){
      $vacinas->setCodigo($_POST["codigo"]);
      if ( $vacinas->pesquisar() ){
         $_SESSION["nome"] = $vacinas->getNome();
         $_SESSION["fabricante"] = $vacinas->getFabricante();
         $_SESSION["tipo"] = $vacinas->getTipo();
         $_SESSION["ndoses"] = $vacinas->getNdoses();
         $_SESSION["eficacia"] = $vacinas->getEficacia();
               
         header('Location: ..\..\..\..\View\dist\templates\base\AlterarCadastroVacina.php');
      }   
   }elseif($acao=="alterar"){
      $codigo = $_POST["codigoVacina"];
      $vacinas->setCodigo($codigo);
      $vacinasDAO->alterar($vacinas);
   }
?>