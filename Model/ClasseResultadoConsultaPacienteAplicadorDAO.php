<?php
  require ("Conexao.php");
  class ResultadoConsultaPacienteAplicadorDAO{
//-----------VISUALIZAR DADOS PACIENTE-----------------------------------
    public function visualizarVacinasPaciente(){
      try {
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare("select * from cvdu.registros where rgPaciente='{$_SESSION['rg']}' ");
        $sql->execute();
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
          <td data-th=”Título coluna 1”>".$linha['codRegistro']."</td>
          <td data-th=”Título coluna 1”><h6>".$linha['nomeVacina']."</h6></td>
          <td data-th=”Título coluna 1”>".$linha['lote']."</td>
          <td data-th=”Título coluna 2”>".$linha['nomeAplicador']."</td>
          <td data-th=”Título coluna 1”>".$linha['dataAplicacao']."</td>
          <td data-th=”Título coluna 1”>".$linha['dose']."</td>
        </tr>";
        }  
      }      
      catch(PDOException $e) {
        echo "entrou no catch".$e->getmessage();
      }
    }
  }
?>