<?php
  require ("Conexao.php");
  class AlterarRegistroAplicadorDAO{
    
//----------------------------------------------------------------------------------------------------
    public function usuarioLogado(){
      try {
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("select * from cvdu.cliente");
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $_SESSION['emaillogado'] = $linha['nome'];
        }     
      }    
      catch(PDOException $e) {
        echo "entrou no catch".$e->getmessage();
      }
    }
//----------------------------------------------------------------------------------------------------
    public function pesquisar($dadosRegistro){
      try{
        $minhaConexao = Conexao::getConexao();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select * from cvdu.registros where codRegistro=:codRegistro");
        $sql->bindParam("codRegistro",$codRegistro);
        $codRegistro = $dadosRegistro->getCodRegistro();
                
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        while ($teste = $sql->fetch(PDO::FETCH_ASSOC)) {
          $dadosRegistro->setCodRegistro($teste['codRegistro']);
          $dadosRegistro->setNomeAplicador($teste['nomeAplicador']);
          $dadosRegistro->setDataAplicacao($teste['dataAplicacao']);
          $dadosRegistro->setNomeVacina($teste['nomeVacina']);
          $dadosRegistro->setLote($teste['lote']);
          $dadosRegistro->setDose($teste['dose']);
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
    public function alterar($dadosRegistro){
      try{
      $minhaConexao = Conexao::getConexao();
      $sql = $minhaConexao->prepare("update cvdu.registros set nomeAplicador=:nomeAplicador, dataAplicacao=:dataAplicacao, nomeVacina=:nomeVacina, lote=:lote, dose=:dose where codRegistro=:codRegistro");
      
      $sql->bindParam("nomeAplicador",$nomeAplicador);
      $sql->bindParam("dataAplicacao",$dataAplicacao);
      $sql->bindParam("nomeVacina",$nomeVacina);
      $sql->bindParam("lote",$lote);
      $sql->bindParam("dose",$dose);
      $sql->bindParam("codRegistro",$codRegistro);
      
      $nomeAplicador = $dadosRegistro->getNomeAplicador();
      $dataAplicacao = $dadosRegistro->getDataAplicacao();
      $nomeVacina = $dadosRegistro->getNomeVacina();
      $lote = $dadosRegistro->getLote();
      $dose = $dadosRegistro->getDose();
      $codRegistro = $dadosRegistro->getCodRegistro();
      
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
              $sql = $minhaConexao->prepare("select * from cvdu.registro where rg='{$rg}'");   
              $sql->bindValue(":rg",$rg);
              $sql->execute();

              $teste = $sql->fetch(PDO::FETCH_ASSOC);
              $_SESSION['codRegistro'] = $teste['codRegistro'];
              $_SESSION['nome'] = $teste['nome'];
              $_SESSION['rg'] = $teste['rg'];
              $_SESSION['dataNascimento'] = $teste['dataNascimento'];
              $_SESSION['nSus'] = $teste['nSus'];
            
              header("Location: ../View/dist/templates/base/AlterarDadosRegistro.php");
              
          
      }catch(PDOException $e) {
          return 0;
      }
    }

  }
?>