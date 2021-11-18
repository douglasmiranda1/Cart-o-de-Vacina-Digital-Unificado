<?php 
    class InserirDoseDAO{
//----------------------------------------------------------------------------------
        public function incluir($inserirDose){
            try{
               $minhaConexao = Conexao::getConexao();
               $sql = $minhaConexao->prepare("insert into cvdu.registros (rgPaciente, nomeAplicador, dataAplicacao, nomeVacina, lote, dose) values (:rgPaciente, :nomeAplicador,:dataAplicacao,:nomeVacina,:lote,:dose)");
               
               $sql->bindParam("rgPaciente",$rgPaciente);
               $sql->bindParam("nomeAplicador",$nomeAplicador);
               $sql->bindParam("dataAplicacao",$dataAplicacao);
               $sql->bindParam("nomeVacina",$nomeVacina);
               $sql->bindParam("lote",$lote);
               $sql->bindParam("dose",$dose);
               
               $rgPaciente = $inserirDose->getRgPaciente();
               $nomeAplicador = $inserirDose->getNomeAplicador();
               $dataAplicacao = $inserirDose->getDataAplicacao();
               $nomeVacina = $inserirDose->getNomeVacina();
               $lote = $inserirDose->getLote();
               $dose = $inserirDose->getDose();
               
               $sql->execute();
               $last_id = $minhaConexao->lastInsertId();
               $inserirDose->setCodRegistro($last_id);
               return $last_id;
            }
            catch(PDOException $e){
                return 0;
            }
        }
    }

?>