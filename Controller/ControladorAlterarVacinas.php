<?php
   session_start();
   require "..\Model\ClasseAlterarVacinas.php";

   $acao =  $_POST["acao"];
   $codigo =  $_POST["codVacina"];
 
   $vacinas = new AlterarVacinas($codigo);

   if ($acao=="consultar"){
      $vacinas->setCodigo($_POST["codVacina"]);
      if ( $vacinas->pesquisar() ){
         $_SESSION["codVacina"] = $vacinas->getCodigo();
         $_SESSION["nomeVacina"] = $vacinas->getNome();
         $_SESSION["fabricante"] = $vacinas->getFabricante();
         $_SESSION["tipo"] = $vacinas->getTipo();
         $_SESSION["ndoses"] = $vacinas->getNdoses();
         $_SESSION["eficacia"] = $vacinas->getEficacia();
               
         header('Location: ..\View\dist\templates\base\AlterarCadastroVacina.php');
      }   
   }elseif($acao=="alterar"){

      $vacinas->setCodigo($_POST["codVacina"]);
      $vacinas->setNome($_POST["nomeVacina"]);
      $vacinas->setFabricante($_POST["fabricante"]);
      $vacinas->setTipo($_POST["tipo"]);
      $vacinas->setNDoses($_POST["ndoses"]);
      $vacinas->setEficacia($_POST["eficacia"]);
      $vacinas->alterar();

      header('Location: ..\View\dist\templates\base\Principal.php');
   }
?>