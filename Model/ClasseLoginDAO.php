<?php
require ("Conexao.php");
class LoginDAO{
    public $logon;
    
    public function login1($rg, $cpf){
        try {
            if ((empty($_POST['rg'])) && (empty($_POST['cpf']))){
                
                $_SESSION['loginErro'] = "Usuario ou Senha inválido";
                header("Location: ../View/dist/templates/base/Login.php");

            }else{
                $minhaConexao = Conexao::getConexao();
                global $logon;
                $sql = $minhaConexao->prepare("select * from cvdu.funcionario where rg='{$rg}' and cpf='{$cpf}'");
                
                $sql->bindValue(":rg",$rg);
                $sql->bindValue(":cpf",$cpf);
                $sql->execute();
                if($sql->rowCount() > 0){
                    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                        if ($linha['especialidade']=='Gerente' or $linha['especialidade']=='gerente'){
                            $_SESSION["usuarioLogado"] = $linha['nome'];
                            $_SESSION["especialidadeUsuarioLogado"] = $linha['especialidade'];
                            header("Location: ../View/dist/templates/base/Principal.php");
                        }else{
                            $_SESSION["usuarioLogado"] = $linha['nome'];
                            $_SESSION["especialidadeUsuarioLogado"] = $linha['especialidade'];
                            header("Location: ../View/dist/templates/base/ConsultarPacienteAplicador.php");
                        }
                    }
                }else{
                    $_SESSION['loginErro'] = "Usuario ou senha inválido";
                    header("Location: ../View/dist/templates/base/Login.php");
                }
                
            }
        }catch(PDOException $e) {
            return 0;
          }
    }
    public function logout(){
        try {
            unset($_SESSION["usuarioLogado"]);
            header("Location: ../View/dist/templates/base/Login.php");
        }catch(PDOException $e) {
            return 0;
          }
    }

}

?>