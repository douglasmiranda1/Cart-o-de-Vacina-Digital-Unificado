<?php 
class funcionarioDAO{
     

    public function incluir($funcionario){
        try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into cvdu.funcionario (nome, rg, cpf, especialidade) values (:nome, :rg, :cpf, :especialidade)");
          
           $sql->bindParam("nome",$nome);
           $sql->bindParam("rg", $rg);
           $sql->bindParam("cpf", $cpf);
           $sql->bindParam("especialidade", $especialidade);

           $nome = $funcionario->getNome();
           $rg = $funcionario->getRg();
           $cpf = $funcionario->getCpf();
           $especialidade = $funcionario->getEspecialidade();

           $sql->execute();
        }
        catch(PDOException $e){
            return 0;
        }
    }

}

?>