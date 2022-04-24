<?php
require_once 'conexao.php';

class MVacinacao {
    private $inj_id;
    private $inj_venc;
    private $inj_data;
    

    function getInj_id() {
        return $this->inj_id;
    }

    function getInj_venc() {
        return $this->inj_venc;
    }

    function getInj_data() {
        return $this->inj_data;
    }

    function setInj_id($inj_id) {
        $this->inj_id = $inj_id;
    }

    function setInj_venc($inj_venc) {
        $this->inj_venc = $inj_venc;
    }

    function setInj_data($inj_data) {
        $this->inj_data = $inj_data;
    }

    
    function __construct($inj_id, $inj_venc, $inj_data) {
        $this->inj_id = $inj_id;
        $this->inj_venc = $inj_venc;
        $this->inj_data = $inj_data;
    }

    function pesquisarVacinacao($busca) {
        $sql = "Select * from tb_agente"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
}

?>