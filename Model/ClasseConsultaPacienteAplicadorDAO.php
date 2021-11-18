<?php
    require ("Conexao.php");
    class ConsultaAplicadorDAO{
        public function consulta1($rg, $dataNascimento){
            try {
                if ((empty($_POST['rg'])) && (empty($_POST['dataNascimento']))){
                    $_SESSION['PacienteInexistente'] = "Paciente não cadastrado";
                    header("Location: ../View/dist/templates/base/ConsultarPacienteAplicador.php");
                }else{
                    $minhaConexao = Conexao::getConexao();
                    $sql = $minhaConexao->prepare("select * from cvdu.paciente where rg='{$rg}' and dataNascimento='{$dataNascimento}'");
                    
                    $sql->bindValue(":rg",$rg);
                    $sql->bindValue(":dataNascimento",$dataNascimento);
                    $sql->execute();

                    $teste = $sql->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['nome'] = $teste['nome'];
                    $_SESSION['rg'] = $teste['rg'];
                    $_SESSION['dataNascimento'] = $teste['dataNascimento'];
                    $_SESSION['nSus'] = $teste['nSus'];
                
                    if($sql->rowCount() > 0){
                        header("Location: ../View/dist/templates/base/ResultadoConsultaPacienteAplicador.php");
                    }else{
                        $_SESSION['PacienteInexistente'] = "Paciente não cadastrado";
                        header("Location: ../View/dist/templates/base/ConsultarPacienteAplicador.php");
                    }
                }
            }catch(PDOException $e) {
                return 0;
            }
        }
    }
?>