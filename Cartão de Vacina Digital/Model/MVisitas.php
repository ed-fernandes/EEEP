<?php
require_once 'conexao.php'; 
//include '../../View/Agente/Visitas.php';
class MVisitas{
    private $visi_id;
    private $visi_data; 
    private $visi_id_pop; 
    private $visi_id_age;
    
    function __construct($visi_id, $visi_id_age,$visi_id_pop, $visi_data){
         $this->visi_id = $visi_id;        
        $this->visi_id_age = $visi_id_age;
        $this->visi_id_pop = $visi_id_pop;
        $this->visi_data = $visi_data;
  
        
    }
    
    function getVisi_id() {
        return $this->visi_id;
    }

    function getVisi_data() {
        return $this->visi_data;
    }

    function getVisi_id_pop() {
        return $this->visi_id_pop;
    }

    function getVisi_id_age() {
        return $this->visi_id_age;
    }

    function setVisi_id($visi_id) {
        $this->visi_id = $visi_id;
    }

    function setVisi_data($visi_data) {
        $this->visi_data = $visi_data;
    }

    function setVisi_id_pop($visi_id_pop) {
        $this->visi_id_pop = $visi_id_pop;
    }

    function setVisi_id_age($visi_id_age) {
        $this->visi_id_age = $visi_id_age;
    }

    
      function SalvarVisita($visi_id_age,$visi_id_pop,$visi_data) {
        $sql = "INSERT INTO tb_visita (fk_age_id, fk_pop_id, vis_data) VALUES ($visi_id_age, $visi_id_pop, '$visi_data');";
        
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
      }
        function EditarData($visi_data) {
        $sql = "UPDATE `tb_visita` SET `vis_data` = '$visi_data';";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
        }
        //Mesclagem de tabelas e suas chaves
        function pesquisarVisitas(){//$busca) {
        $sql = "SELECT * FROM tb_visita INNER JOIN  tb_populacao on tb_populacao.pop_id = tb_visita.fk_pop_id INNER JOIN tb_agente on tb_agente.age_id = tb_visita.fk_age_id";//where visi_nome_id like '%$busca%'" 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
      }
    function pesquisarVisitasData($busca){
        $sql = "Select * from tb_visita where visi_data = '$busca'";
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;  
      }
         function pesquisarVisitasID($busca) {
        $sql = "Select * from tb_visitas where visi_id = '$busca'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
}
 
?>