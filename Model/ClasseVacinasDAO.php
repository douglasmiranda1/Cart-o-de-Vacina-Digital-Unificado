<?php
  echo "<link rel=”stylesheet” type=”text/css” href=”../View/dist/templates/base/dsgov.css” />";
  echo "<script src=”../View/dist/templates/dsgov.js”></script>";
  echo "<link rel=”stylesheet” href=”https://cdn.dsgovserprodesign.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css” />";
  echo "<link rel=”stylesheet” href=”https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap” />";
  echo "<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css” />";
  require ("Conexao.php");
  class VacinasDAO{
    
    //-----------VISUALIZAR VACINAS -----------------------------------
    public function visualizar(){
      try {
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("select * from cvdu.vacinas");
        $codigo = 1;
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>
          <td data-th=”Título coluna 1”>".$linha['codVacina']."</td>
          <td data-th=”Título coluna 1”>".$linha['nome']."</td>
          <td data-th=”Título coluna 2”>".$linha['fabricante']."</td>
          <td data-th=”Título coluna 2”>".$linha['tipo']."</td>
          <td data-th=”Título coluna 2”>".$linha['ndoses']."</td>
          <td data-th=”Título coluna 2”>".$linha['eficacia']."</td>
        </tr>";
        
        }  
      }      
      catch(PDOException $e) {
        echo "entrou no catch".$e->getmessage();
      }
    }
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
        $sql = $minhaConexao->prepare("select * from cvdu.vacinas where codigo=:codigo");
        $sql->bindParam("codigo",$codigo);
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
public function visualizarFuncionario(){
  try {
      $minhaConexao = Conexao::getConexao();
      $sql = $minhaConexao->prepare("select * from cvdu.funcionario");
      $codigo = 1;
      
      $sql->execute();
      $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
      
      while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>
          <td data-th=”Título coluna 1”>".$linha['codFuncionario']."</td>
          <td data-th=”Título coluna 1”>".$linha['nome']."</td>
          <td data-th=”Título coluna 2”>".$linha['rg']."</td>
          <td data-th=”Título coluna 1”>".$linha['cpf']."</td>
          <td data-th=”Título coluna 1”>".$linha['especialidade']."</td>
          </tr>";
      }
    }
    catch(PDOException $e) {
      echo "entrou no catch".$e->getmessage();
    }
}
  }
?>