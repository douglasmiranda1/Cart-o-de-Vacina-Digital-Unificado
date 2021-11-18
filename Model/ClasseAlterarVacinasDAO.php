<?php
  require ("Conexao.php");
  class AlterarVacinasDAO{
    
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
    public function pesquisar($dadosVacina){
      try{
        $minhaConexao = Conexao::getConexao();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select * from cvdu.vacinas where codVacina=:codVacina");
        $sql->bindParam("codVacina",$codigo);
        $codigo = $dadosVacina->getCodigo();
                
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        while ($teste = $sql->fetch(PDO::FETCH_ASSOC)) {
          $dadosVacina->setNome($teste['nome']);
          $dadosVacina->setFabricante($teste['fabricante']);
          $dadosVacina->setTipo($teste['tipo']);
          $dadosVacina->setNDoses($teste['ndoses']);
          $dadosVacina->setEficacia($teste['eficacia']);
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
public function alterar($dadosVacina){
  try{
   $minhaConexao = Conexao::getConexao();
   $sql = $minhaConexao->prepare("update cvdu.vacinas set nome=:nome, fabricante=:fabricante, tipo=:tipo, ndoses=:ndoses, eficacia=:eficacia  where codVacina=:codVacina");
   $sql->bindParam("nome",$nome);
   $sql->bindParam("fabricante",$fabricante);
   $sql->bindParam("tipo",$tipo);
   $sql->bindParam("ndoses",$ndoses);
   $sql->bindParam("eficacia",$eficacia);
   $sql->bindParam("codVacina",$codigo);
   
   $nome = $dadosVacina->getNome();
   $fabricante = $dadosVacina->getFabricante();
   $tipo = $dadosVacina->getTipo();
   $ndoses = $dadosVacina->getNdoses();
   $eficacia = $dadosVacina->getEficacia();
   $codigo = $dadosVacina->getCodigo();
   
   $sql->execute();
   
  }
  catch(PDOException $e){
      return "entrou no catch".$e->getmessage();
  }
}
  }
?>