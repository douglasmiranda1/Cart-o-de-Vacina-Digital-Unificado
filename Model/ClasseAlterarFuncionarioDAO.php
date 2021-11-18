<?php
  require ("Conexao.php");
  class AlterarFuncionarioDAO{
    
//----------------------------------------------------------------------------------------------------
    public function usuarioLogado(){
      try {
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("select * from cvdu.cliente");
        $codigo = 1;
                    
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
    public function pesquisar($dadosFuncionario){
      try{
        $minhaConexao = Conexao::getConexao();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select * from cvdu.funcionario where codFuncionario=:codFuncionario");
        $sql->bindParam("codFuncionario",$codFuncionario);
        $codFuncionario = $dadosFuncionario->getcodFuncionario();
                
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        while ($teste = $sql->fetch(PDO::FETCH_ASSOC)) {
          $dadosFuncionario->setNome($teste['nome']);
          $dadosFuncionario->setRg($teste['rg']);
          $dadosFuncionario->setCpf($teste['cpf']);
          $dadosFuncionario->setEspecialidade($teste['especialidade']);
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
public function alterar($dadosFuncionario){
  try{
   $minhaConexao = Conexao::getConexao();
   $sql = $minhaConexao->prepare("update cvdu.funcionario set nome=:nome, rg=:rg, cpf=:cpf, especialidade=:especialidade where codFuncionario=:codFuncionario");
   $sql->bindParam("nome",$nome);
   $sql->bindParam("rg",$rg);
   $sql->bindParam("cpf",$cpf);
   $sql->bindParam("especialidade",$especialidade);
   $sql->bindParam("codFuncionario",$codFuncionario);
   
   $nome = $dadosFuncionario->getNome();
   $rg = $dadosFuncionario->getRg();
   $cpf = $dadosFuncionario->getCpf();
   $especialidade = $dadosFuncionario->getEspecialidade();
   $codFuncionario = $dadosFuncionario->getCodFuncionario();
   
   $sql->execute();
   
  }
  catch(PDOException $e){
      return "entrou no catch".$e->getmessage();
  }
}
  }
?>