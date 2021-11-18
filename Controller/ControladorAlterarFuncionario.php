<?php
   session_start();
   require "..\Model\ClasseAlterarFuncionario.php";

   $acao =  $_POST["acao"];
 
   $funcionario = new AlterarFuncionario();

   if ($acao=="consultar"){
      $funcionario->setCodFuncionario($_POST["codFuncionario"]);
      if ( $funcionario->pesquisar() ){
         $_SESSION["codFuncionario"] = $funcionario->getCodFuncionario();
         $_SESSION["nomeFuncionario"] = $funcionario->getNome();
         $_SESSION["rg"] = $funcionario->getRg();
         $_SESSION["cpf"] = $funcionario->getCpf();
         $_SESSION["especialidade"] = $funcionario->getEspecialidade();
         
         header('Location: ..\View\dist\templates\base\AlterarCadastroFuncionario.php');
      }   
   }elseif($acao=="alterar"){

      $funcionario->setCodFuncionario($_POST["codFuncionario"]);
      $funcionario->setNome($_POST["nome"]);
      $funcionario->setRg($_POST["rg"]);
      $funcionario->setCpf($_POST["cpf"]);
      $funcionario->setEspecialidade($_POST["especialidade"]);
      
      $funcionario->alterar();

      header('Location: ..\View\dist\templates\base\Principal.php');
   }
?>