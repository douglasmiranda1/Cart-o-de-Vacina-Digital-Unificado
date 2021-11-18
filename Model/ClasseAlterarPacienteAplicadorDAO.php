<?php
  require ("Conexao.php");
  class AlterarPacienteAplicadorDAO{
    //----------------------------------------------------------------------------------------------------
    public function pesquisar($dadosPaciente){
      try{
        $minhaConexao = Conexao::getConexao();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select * from cvdu.paciente where rg=:rg");
        $sql->bindParam("rg",$rg);
        $rg = $dadosPaciente->getRg();
        $sql->execute();
        
        while ($teste = $sql->fetch(PDO::FETCH_ASSOC)) {
          $dadosPaciente->setCodPaciente($teste['codPaciente']);
          $dadosPaciente->setNome($teste['nome']);
          $dadosPaciente->setRg($teste['rg']);
          $dadosPaciente->setDataNascimento($teste['dataNascimento']);
          $dadosPaciente->setNSus($teste['nSus']);
        }
        return true;
      }
      catch(PDOException $e) {
        echo "entrou no catch".$e->getmessage();
        return false; 
      }
      $minhaConexao = null;
    }
    //----------------------------------------------------------------------------------------------------
    public function alterar($dadosPaciente){
      try{
      $minhaConexao = Conexao::getConexao();
      $sql = $minhaConexao->prepare("update cvdu.paciente set nome=:nome, rg=:rg, dataNascimento=:dataNascimento, nSus=:nSus where codPaciente=:codPaciente");
      $sql->bindParam("nome",$nome);
      $sql->bindParam("rg",$rg);
      $sql->bindParam("dataNascimento",$dataNascimento);
      $sql->bindParam("nSus",$nSus);
      $sql->bindParam("codPaciente",$codPaciente);
      
      $nome = $dadosPaciente->getNome();
      $rg = $dadosPaciente->getRg();
      $dataNascimento = $dadosPaciente->getDataNascimento();
      $nSus = $dadosPaciente->getNSus();
      $codPaciente = $dadosPaciente->getCodPaciente();
      
      $sql->execute();

      header('Location: ..\View\dist\templates\base\ResultadoConsultaPacienteAplicador.php');
      
      }
      catch(PDOException $e){
          return "entrou no catch".$e->getmessage();
      }
    }
//----------------------------------------------------------------------------------------------------
    public function consulta1($rg){
      try {
              $minhaConexao = Conexao::getConexao();
              $sql = $minhaConexao->prepare("select * from cvdu.paciente where rg='{$rg}'");   
              $sql->bindValue(":rg",$rg);
              $sql->execute();

              $teste = $sql->fetch(PDO::FETCH_ASSOC);
              $_SESSION['codPaciente'] = $teste['codPaciente'];
              $_SESSION['nome'] = $teste['nome'];
              $_SESSION['rg'] = $teste['rg'];
              $_SESSION['dataNascimento'] = $teste['dataNascimento'];
              $_SESSION['nSus'] = $teste['nSus'];
            
              header("Location: ../View/dist/templates/base/AlterarDadosPacienteAplicador.php");
              
          
      }catch(PDOException $e) {
          return 0;
      }
    }

  }
?>