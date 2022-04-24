<?php

class Conexao {
    public function conectar(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "bd_cadastro";      
        
        $this->conexao = mysqli_connect($servidor, $usuario, $senha, $banco);  
        $this->executarSQL('SET NAMES UTF8');
    }
    
    public function executarSQL($sql) {
        $this->result = mysqli_query($this->conexao, $sql);        
    }
    
   public function PesquisarSQL($sql) {
        $this->result = mysqli_query($this->conexao, $sql);
        return $this->result;       
    }
    
    public function desconectar() {
        mysqli_close($this->conexao);
    }
}
