<?php
require_once 'conexao.php';
  function login($age_login, $age_senha) {
        $sql = "Select * from tb_agente where age_login = '$age_login' and age_senha = '$age_senha'";       
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }

?>

