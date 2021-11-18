<?php
   session_start();
   require "..\Model\ClasseAlterarRegistroAplicador.php";

   $acao =  $_POST["acao"];
   $codRegistro = $_POST["codRegistro"];
 
   $registro = new AlterarRegistroAplicador($codRegistro);
   $registroDAO = new AlterarRegistroAplicadorDAO();

   if ($acao=="consultar"){
      $registro->setCodRegistro($_POST["codRegistro"]);
      if ( $registro->pesquisar() ){
         $_SESSION["codRegistro"] = $registro->getCodRegistro();
         $_SESSION["nomeAplicador"] = $registro->getNomeAplicador();
         $_SESSION["dataAplicacao"] = $registro->getDataAplicacao();
         $_SESSION["nomeVacina"] = $registro->getNomeVacina();
         $_SESSION["lote"] = $registro->getLote();
         $_SESSION["dose"] = $registro->getDose();
         

         echo $_SESSION["codRegistro"]."<br>";
         echo $_SESSION["nomeAplicador"]."<br>";
         echo $_SESSION["dataAplicacao"]."<br>";
         echo $_SESSION["nomeVacina"]."<br>";
         echo $_SESSION["lote"]."<br>";
         echo $_SESSION["dose"];
         header('Location: ..\View\dist\templates\base\AlterarRegistroAplicador.php');
      }   
   }elseif($acao=="AlterarRegistro"){

      $registro->setCodRegistro($_POST["codRegistro"]);
      $registro->setNomeAplicador($_POST["nomeAplicador"]);
      $registro->setDataAplicacao($_POST["dataAplicacao"]);
      $registro->setNomeVacina($_POST["nomeVacina"]);
      $registro->setLote($_POST["lote"]);
      $registro->setDose($_POST["dose"]);
    
      $registro->alterar();

      
   }elseif($acao=="inserirDose"){
      $_SESSION["rgPaciente"] = $_POST["rg"];
      
      header('Location: ..\View\dist\templates\base\InserirDoseAplicador.php');
   }
?>