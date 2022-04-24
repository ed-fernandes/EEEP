<?php
require_once 'conexao.php';

class MSecretaria {
    private $sec_login;
    private $sec_senha;
    private $sec_cidade;

    function getSec_login() {
        return $this->sec_login;
    }

    function getSec_senha() {
        return $this->sec_senha;
    }

    function getSec_cidade() {
        return $this->sec_cidade;
    }

    function setSec_login($sec_login) {
        $this->sec_login = $sec_login;
    }

    function setSec_senha($sec_senha) {
        $this->sec_senha = $sec_senha;
    }

    function setSec_cidade($sec_cidade) {
        $this->sec_cidade = $sec_cidade;
    }

    function __construct($sec_login, $sec_senha, $sec_cidade) {
        $this->sec_login = $sec_login;
        $this->sec_senha = $sec_senha;
        $this->sec_cidade = $sec_cidade;
    }

    function login($sec_login, $sec_senha) {
         $sql = "Select * from tb_secretaria where sec_login = '$sec_login' and sec_senha = '$sec_senha'";       
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
    
     function pesquisar($busca) {
        $sql = "Select * from tb_secretaria";       
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
}

?>