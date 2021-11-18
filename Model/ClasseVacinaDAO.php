<?php //Verificado e corrigido 
class vacinasDAO{
     

    public function incluir($vacinas){
        try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into cvdu.vacinas (nome, fabricante, tipo, ndoses, eficacia) values (:nome, :fabricante,:tipo,:ndoses, :eficacia)");
           
           $sql->bindParam("nome",$nome);
           $sql->bindParam("fabricante",$fabricante);
           $sql->bindParam("tipo",$tipo);
           $sql->bindParam("ndoses",$ndoses);
           $sql->bindParam("eficacia",$eficacia);
           
           $nome = $vacinas->getNome();
           $fabricante = $vacinas->getFabricante();
           $tipo = $vacinas->getTipo();
           $ndoses = $vacinas->getNdoses();
           $eficacia = $vacinas->getEficacia();
           
           $sql->execute();
           $last_id = $minhaConexao->lastInsertId();
           $vacinas->setCodVacina($last_id);
           return $last_id;
        }
        catch(PDOException $e){
            return 0;
        }
    }



public function alterar($vacinas){
      try{
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("update cvdu.vacinas set nome=:nome, fabricante=:fabricante, tipo=:tipo, ndoses=:ndoses, eficacia=:eficacia where codVacina=:codVacina");
        $sql->bindParam("codVacina",$codVacina);
        $sql->bindParam("nome",$nome);
        $sql->bindParam("fabricante",$fabricante);
        $sql->bindParam("tipo",$tipo);
        $sql->bindParam("ndoses",$ndoses);
        $sql->bindParam("eficacia",$eficacia);
        
        $codVacina = $vacinas ->getCodVacina();
        $nome= $vacinas->getNome();
        $fabricante = $vacinas->getFabricante();
        $tipo = $vacinas->getTipo();
        $ndoses = $vacinas->getNdoses();
        $eficacia = $vacinas->getEficacia();
        $sql->execute();
       
       echo "alterado com sucesso";
       
      }
      catch(PDOException $e){
          return "entrou no catch.".$e->getmessage();
      }
    }

    public function excluir($vacinas){
        try{
         $minhaConexao = Conexao::getConexao();
         $sql = $minhaConexao->prepare("delete from cvdu.vacinas where codVacina=:codVacina");
         $sql->bindParam("codVacina",$codVacina);
         $codVacina = $vacinas->getCodVacina();
         $sql->execute();
         echo "Excluido com sucesso";
         
        }
        catch(PDOException $e){
            return "entrou no catch".$e->getmessage();
        }
    }
   
    public function visualizar(){
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from cvdu.vacinas");
            $codigo = 1;
            
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo " Identificador da vacina: ",$linha['codVacina'];
                echo "<br>";
                echo " Nome da vacina: ",$linha['nome'];
                echo "<br>";
                echo " Fabricante: ",$linha['fabricante'];
                echo "<br>";
                echo " Tipo: ",$linha['tipo'];
                echo "<br>";
                echo " Numero de doses: ",$linha['ndoses'];
                echo "<br>";
                echo " Eficácia: ",$linha['eficacia'];
                echo "<br>";
                echo "================================";
                echo "<br>";
            }
          }
          catch(PDOException $e) {
            echo "entrou no catch".$e->getmessage();
          }
    }

}

?>