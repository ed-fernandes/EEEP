<?php

require_once 'conexao.php';

class MPostoDeSaude {

    private $psf_id;
    private $psf_login;
    private $psf_senha;

    
    function __construct($psf_id, $psf_login, $psf_senha) {
        $this->psf_id = $psf_id;
        $this->psf_login = $psf_login;
        $this->psf_senha = $psf_senha;
    }
    
    function GetPsf_id() {
        return $this->psf_id;
    }

    function setPsf_id($psf_id) {

        $this->psf_id = $psf_id;
    }

    function GetPfs_login() {
        return $this->psf_id;
    }

    function setPsf_login($psf_login) {
        $this->psf_login = $psf_login;
    }

    function GetPsf_senha() {
        return $this->psf_senha;
    }

    function setPsf_senha($psf_senha) {

        $this->psf_senha = $psf_senha;
    }

    

    function login($psf_login, $psf_senha) {
        $sql = "SELECT * FROM tb_psf where psf_login ='$psf_login'and psf_senha ='$psf_senha'";
        $Conexao = new Conexao();
        $Conexao->conectar();
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;
    }
    

     function Salvar($psf_id, $psf_login, $psf_senha) {
            $sql = "INSERT INTO tb_psf (psf_login,psf_senha) VALUES ('$psf_login', '$psf_senha');";
            $Conexao = new Conexao();
            $Conexao->conectar();    
            $Conexao->executarSQL($sql);
            $Conexao->desconectar();
        }
            
    function Editar($psf_id,$psf_login, $psf_senha) {
        $sql = "UPDATE `tb_psf` SET `psf_login` = '$psf_login', `psf_senha` = '$psf_senha' WHERE `tb_psf`.`psf_id` = $psf_id;";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
    }
            
            
         function pesquisarPSF($busca) {
      
            $sql = "Select * from tb_psf where psf_login like '%$busca%'"; 
            $Conexao = new Conexao();
            $Conexao->conectar();        
            $result = $Conexao->PesquisarSQL($sql);
            $Conexao->desconectar();
            return $result;   
        }    
        
    }
?>

