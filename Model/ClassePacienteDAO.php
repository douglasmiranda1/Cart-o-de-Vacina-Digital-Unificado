<?php
require ("Conexao.php");
class PacienteDAO{

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
    public function alterar($pacienteCadastrado){
        try{
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("update tabemono.cliente set nome=:nome, cpf=:cpf, email=:email where codigo=:codigo");
        $sql->bindParam("nome",$nome);
        $sql->bindParam("cpf",$cpf);
        $sql->bindParam("email",$email);
        $sql->bindParam("codigo",$codigo);
        $nome = $pacienteCadastrado->getNomeCadastro();
        $cpf = $pacienteCadastrado->getcpf();
        $email = $pacienteCadastrado->getemail();
        $codigo = $pacienteCadastrado->getCodigo();
        $sql->execute();
        echo "alterado com sucesso";

        }
        catch(PDOException $e){
            return "entrou no catch.".$e->getmessage();
        }
        }
    }

?>