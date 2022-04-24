<?php
require_once 'conexao.php';

class MRotas {
   private $rot_id;
   private $rot_fk_age;
   private $rot_desI;
   private $rot_desF;
   
   function __construct($rot_id, $rot_fk_age, $rot_desI, $rot_desF) {
       $this->rot_id = $rot_id;
       $this->rot_fk_age = $rot_fk_age;
       $this->rot_desI = $rot_desI;
       $this->rot_desF = $rot_desF;
   }
   function getRot_id() {
       return $this->$rot_id;
   }

   function getRot_fk_age() {
       return $this->rot_fk_age;
   }

   function getRot_desI() {
       return $this->rot_desI;
   }

   function getRot_desF() {
       return $this->rot_desF;
   }

   function setRot_id($rot_id) {
       $this->rot_id = $rot_id;
   }

   function setRot_fk_age($rot_fk_age) {
       $this->rot_fk_age = $rot_fk_age;
   }

   function setRot_desI($rot_desI) {
       $this->rot_desI = $rot_desI;
   }

   function setRot_desF($rot_desF) {
       $this->rot_desF = $rot_desF;
   }

   
        function SalvarRotas($rot_fk_age, $rot_desI,$rot_desF) {
        $sql = "INSERT INTO `tb_rotas` (`rot_id`,`rot_fk_age`, `rot_desI`, `rot_desF`)"
                . " VALUES (NULL, '$rot_fk_age', '$rot_desI', '$rot_desF');";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
      }
        function pesquisarRotasID($busca) {
        $sql = "Select * from tb_rotas where rot_id like '%$busca%'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }


}
//rot_desI se refere ao destino em que o agente partirá 
//rot_desF se refere ao destino em que o agente chegará(tanto na base de dados quanto no sistema ;)
