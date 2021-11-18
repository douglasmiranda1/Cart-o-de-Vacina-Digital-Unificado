<?php
    require ("Conexao.php");
    class PacienteAplicadorDAO{
        public function incluir($pacienteCadastrado){
            try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into cvdu.paciente (nome, rg, dataNascimento, nSus) values (:nome, :rg,:dataNascimento,:nSus)");
            $sql->bindParam("nome",$nome);
            $sql->bindParam("rg",$rg);
            $sql->bindParam("dataNascimento",$dataNascimento);
            $sql->bindParam("nSus",$nSus);

            $nome = $pacienteCadastrado->getNome();
            $rg = $pacienteCadastrado->getRg();
            $dataNascimento = $pacienteCadastrado->getDataNascimento();
            $nSus = $pacienteCadastrado->getNSus();

            $sql->execute();
            $last_id = $minhaConexao->lastInsertId();
            $pacienteCadastrado->setCodigo($last_id);
            return $last_id;
            }
            catch(PDOException $e){
                return 0;
            }
        }
    }
?>