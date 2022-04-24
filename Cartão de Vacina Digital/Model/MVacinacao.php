<?php
require_once 'conexao.php';

class MVacinacao {
    private $inj_id;
    private $fk_vac_id;
    private $fk_pop_id;
    private $inj_data;
        
    function __construct($inj_id, $fk_vac_id, $fk_pop_id, $inj_data) {
        $this->inj_id = $inj_id;
        $this->fk_vac_id = $fk_vac_id;
        $this->fk_pop_id = $fk_pop_id;
        $this->inj_data = $inj_data;
    }
        function getInj_id() {
        return $this->inj_id;
    }
    function getFk_vac_id() {
        return $this->fk_vac_id;
    }

    function getFk_pop_id() {
        return $this->fk_pop_id;
    }
    function getInj_data() {
        return $this->inj_data;
    }
        function setInj_id($inj_id) {
        $this->inj_id = $inj_id;
    }
    function setFk_vac_id($fk_vac_id) {
        $this->fk_vac_id = $fk_vac_id;
    }

    function setFk_pop_id($fk_pop_id) {
        $this->fk_pop_id = $fk_pop_id;
    }


    function setInj_data($inj_data) {
        $this->inj_data = $inj_data;
    }


    
    function pesquisarVacinacao($busca) {
        $sql = "Select * from tb_vacinacao JOIN tb_vacina ON tb_vacinacao.fk_vac_id = tb_vacina.vac_id
        JOIN tb_populacao ON tb_vacinacao.fk_pop_id = tb_populacao.pop_id"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }

    function CadastrarVacinacao($fk_vac_id, $fk_pop_id,  $inj_data) {
        //$sql = "INSERT INTO `tb_vacinacao` ( `fk_vac_id`, `fk_pop_id`, `inj_data`) VALUES ( '$fk_vac_id', '$fk_pop_id', '$inj_data');"; 
        $sql = "INSERT INTO `tb_vacinacao`(`inj_id`, `fk_vac_id`, `fk_pop_id`, `inj_data`) VALUES (null,'$fk_vac_id','$fk_pop_id','$inj_data');";
        
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
    }
}

?> 

