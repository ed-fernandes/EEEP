<?php
require_once 'conexao.php';

class MVacina{
    private $vac_id;
    private $vac_nome;
    private $vac_min;
    private $vac_max;

    

    function __construct($vac_id, $vac_nome, $vac_min, $vac_max){
        $this->vac_id = $vac_id;
        $this->vac_nome = $vac_nome;
        $this->vac_min = $vac_min;
        $this->vac_max = $vac_max;
    }
    
    function getVac_id() {
        return $this->vac_id;
    }

    function getVac_nome() {
        return $this->vac_nome;
    }

    function getVac_min() {
        return $this->vac_min;
    }

    function getVac_max() {
        return $this->vac_max;
    }

    function setVac_id($vac_id) {
        $this->vac_id = $vac_id;
    }

    function setVac_nome($vac_nome) {
        $this->vac_nome = $vac_nome;
    }

    function setVac_min($vac_min) {
        $this->vac_min = $vac_min;
    }

    function setVac_max($vac_max) {
        $this->vac_max = $vac_max;
    }

         function pesquisarTodas() {
  
        $sql = "Select * from tb_vacina"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
    

  
    
      function CadastrarVac($vac_nome,$vac_min,$vac_max) {
        
        $sql = "INSERT INTO `tb_vacina`(`vac_nome`,`vac_min`,`vac_max`) VALUES ('$vac_nome','$vac_min','$vac_max');";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
        }
        
        function EditarVac($vac_id, $vac_nome,$vac_min,$vac_max) {
        $sql = "UPDATE `tb_vacina` SET `vac_nome` = '{$vac_nome}',`vac_min` = '{$vac_min}' ,`vac_max` = '{$vac_max}'    WHERE `tb_vacina`.`vac_id` = $vac_id;";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
        }
        function vacinasDisponiveis() {
            $sql = " SELECT DATE_FORMAT(tb_vacinacao.inj_data, '%d/%m/%Y') as data, tb_vacina.vac_nome, tb_vacina.vac_min, tb_vacina.vac_max FROM tb_vacinacao RIGHT JOIN tb_vacina ON tb_vacina.vac_id = tb_vacinacao.fk_vac_id AND tb_vacinacao.fk_pop_id IN({$_SESSION['pop_id']}) WHERE tb_vacinacao.fk_vac_id is not null or  tb_vacinacao.inj_data is null GROUP by tb_vacina.vac_id";
    
            $Conexao = new Conexao(); $Conexao->conectar();        
            $result = $Conexao->PesquisarSQL($sql);
            $Conexao->desconectar(); return $result;   
        }
    
        
         function pesquisarVac($busca) {
  
        $sql = "Select * from tb_vacina where vac_nome like '%$busca%'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
          function pesquisarVacID($busca) {
        $sql = "Select * from tb_vacina where vac_id = '$busca'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
 
}

?>