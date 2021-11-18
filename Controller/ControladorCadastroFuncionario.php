<?php
   session_start();
   require ("..\Model\ClasseFuncionario.php");
   require ("..\Model\ClasseFuncionarioDAO.php");

   //receber os dados da interface
   $acao = $_POST["acao"];
   $nome = $_POST["nome"];
   $rg = $_POST["rg"];
   $cpf = $_POST["cpf"];   
   $especialidade = $_POST["especialidade"];

   $funcionario = new funcionario ($nome, $rg, $cpf, $especialidade);
   $funcionarioDAO = new funcionarioDAO();

 if ($acao=="incluir"){ //incluir
     $funcionarioDAO->incluir($funcionario);
      header('Location: ..\View\dist\templates\base\Principal.php');
   }
   
?>