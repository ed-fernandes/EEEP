<?php
require_once 'conexao.php';

class MAgente {
    private $age_id;
    private $age_nome;
    private $age_estado;
    private $age_cidade;
    private $age_login;
    private $age_senha;

    function __construct($age_id, $age_nome, $age_estado, $age_cidade, $age_login, $age_senha){
        $this->age_id = $age_id;
        $this->age_nome = $age_nome;
        $this->age_estado = $age_estado;
        $this->age_cidade = $age_cidade;
        $this->age_login = $age_login;
        $this->age_senha = $age_senha;
        
    }
    
    function getAge_id() {
        return $this->age_id;
    }

    function getAge_nome() {
        return $this->age_nome;
    }

    function getAge_estado() {
        return $this->age_estado;
    }

    function getAge_cidade() {
        return $this->age_cidade;
    }

    function getAge_login() {
        return $this->age_login;
    }

    function getAge_senha() {
        return $this->age_senha;
    }

    function setAge_id($age_id) {
        $this->age_id = $age_id;
    }

    function setAge_nome($age_nome) {
        $this->age_nome = $age_nome;
    }

    function setAge_estado($age_estado) {
        $this->age_estado = $age_estado;
    }

    function setAge_cidade($age_cidade) {
        $this->age_cidade = $age_cidade;
    }

    function setAge_login($age_login) {
        $this->age_login = $age_login;
    }

    function setAge_senha($age_senha) {
        $this->age_senha = $age_senha;
    }



    function login($age_login, $age_senha) {
        $sql = "Select * from tb_agente where age_login = '$age_login' and age_senha = '$age_senha'";       
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
    
      function Salvar($age_nome, $age_login, $age_senha, $age_estado, $age_cidade) {
        $sql = "INSERT INTO tb_agente (age_nome, age_login, age_senha, age_estado, age_cidade) VALUES ('$age_nome', '$age_login', '$age_senha', '$age_estado', '$age_cidade');";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
        }
        
        function Editar($age_id, $age_nome, $age_login, $age_senha, $age_estado, $age_cidade) {
        $sql = "UPDATE `tb_agente` SET `age_nome` = '$age_nome', `age_login` = '$age_login', `age_senha` = '$age_senha', `age_estado` = $age_estado, `age_cidade` = '$age_cidade' WHERE `tb_agente`.`age_id` = $age_id;";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
        }
        
        
         function pesquisarAgente($busca) {
  
        $sql = "Select * from tb_agente where age_nome like '%$busca%'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
    
        
         function pesquisarAgenteID($busca) {
        $sql = "Select * from tb_agente where age_id = '$busca'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
   }

?>