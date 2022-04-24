<?php

require_once 'conexao.php';

class MPopulacao {
    private $pop_id;
    private $pop_nome;
    private $pop_data_nascimento;
    private $pop_pai;
    private $pop_mae;
    private $pop_logradouro;
    private $pop_nome_log;
    private $pop_num;
    private $pop_bairro;
    private $pop_estado;
    private $pop_cidade;
    private $pro_login;
    private $pro_senha;
    
    function getPop_id() {
        return $this->pop_id;
    }

    function getPop_nome() {
        return $this->pop_nome;
    }

    function getPop_data_nascimento() {
        return $this->pop_data_nascimento;
    }

    function getPop_pai() {
        return $this->pop_pai;
    }

    function getPop_mae() {
        return $this->pop_mae;
    }

    function getPop_logradouro() {
        return $this->pop_logradouro;
    }

    function getPop_nome_log() {
        return $this->pop_nome_log;
    }

    function getPop_num() {
        return $this->pop_num;
    }

    function getPop_bairro() {
        return $this->pop_bairro;
    }

    function getPop_estado() {
        return $this->pop_estado;
    }

    function getPop_cidade() {
        return $this->pop_cidade;
    }

    function getPop_login() {
        return $this->pro_login;
    }

    function getPop_senha() {
        return $this->pro_senha;
    }

    function setPop_id($pop_id) {
        $this->pop_id = $pop_id;
    }

    function setPop_nome($pop_nome) {
        $this->pop_nome = $pop_nome;
    }

    function setPop_data_nascimento($pop_data_nascimento) {
        $this->pop_data_nascimento = $pop_data_nascimento;
    }

    function setPop_pai($pop_pai) {
        $this->pop_pai = $pop_pai;
    }

    function setPop_mae($pop_mae) {
        $this->pop_mae = $pop_mae;
    }

    function setPop_logradouro($pop_logradouro) {
        $this->pop_logradouro = $pop_logradouro;
    }

    function setPop_nome_log($pop_nome_log) {
        $this->pop_nome_log = $pop_nome_log;
    }

    function setPop_num($pop_num) {
        $this->pop_num = $pop_num;
    }

    function setPop_bairro($pop_bairro) {
        $this->pop_bairro = $pop_bairro;
    }

    function setPop_estado($pop_estado) {
        $this->pop_estado = $pop_estado;
    }

    function setPop_cidade($pop_cidade) {
        $this->pop_cidade = $pop_cidade;
    }

    function setPop_login($pro_login) {
        $this->pro_login = $pro_login;
    }

    function setPop_senha($pro_senha) {
        $this->pro_senha = $pro_senha;
    }

    function __construct($pop_id, $pop_nome, $pop_data_nascimento, $pop_pai, $pop_mae, $pop_logradouro, $pop_nome_log, $pop_num, $pop_bairro, $pop_estado, $pop_cidade, $pro_login, $pro_senha) {
        $this->pop_id = $pop_id;
        $this->pop_nome = $pop_nome;
        $this->pop_data_nascimento = $pop_data_nascimento;
        $this->pop_pai = $pop_pai;
        $this->pop_mae = $pop_mae;
        $this->pop_logradouro = $pop_logradouro;
        $this->pop_nome_log = $pop_nome_log;
        $this->pop_num = $pop_num;
        $this->pop_bairro = $pop_bairro;
        $this->pop_estado = $pop_estado;
        $this->pop_cidade = $pop_cidade;
        $this->pop_login = $pro_login;
        $this->pop_senha = $pro_senha;
    }

     function login($pop_login, $pop_senha) {
        $sql = "Select * from tb_populacao";       
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
    
     function pesquisar($busca, $tipo) {
         if ($tipo == 1) {
             $sql = "Select * from tb_populacao where pop_nome like '%$busca%'"; 
         } else if ($tipo == 2) {
             $sql = "Select * from tb_populacao where pop_nome_log like '%$busca%'"; 
         } else {
             $sql = "Select * from tb_populacao where pop_bairro like '%$busca%'"; 
         }
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
}
?>