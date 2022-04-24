<?php
include "../../Model/MAgente.php";

class CAgente {
    function login($age_login, $age_senha) {
        $MAgente = new MAgente("", "", "", "");
        $result = $MAgente->login($age_login, $age_senha);
        return $result;
    }
    
    function SalvarAgente($age_nome, $age_login, $age_senha, $age_estado, $age_cidade) {
         $MAgente = new MAgente(null, $age_nome, $age_estado, $age_cidade, $age_login, $age_senha);
         $MAgente->Salvar($MAgente->getAge_nome(), $MAgente->getAge_login(), $MAgente->getAge_senha(), $MAgente->getAge_estado(), $MAgente->getAge_cidade());         
    }
    
       function pesquisarAgente($busca) {
        $MAgente = new MAgente(null, null, 0, null, null, null);
        $result = $MAgente->pesquisarAgente($busca);
        return $result;
    }
    
       function pesquisarAgenteID($busca) {
        $MAgente = new MAgente(null, null, 0, null, null, null);
        $result = $MAgente->pesquisarAgenteID($busca);
        return $result;
    }
    
    
      function EditarAgente($age_id, $age_nome, $age_login, $age_senha, $age_estado, $age_cidade) {
         $MAgente = new MAgente($age_id, $age_nome, $age_estado, $age_cidade, $age_login, $age_senha);
         $MAgente->Editar($MAgente->getAge_id(),$MAgente->getAge_nome(), $MAgente->getAge_login(), $MAgente->getAge_senha(), $MAgente->getAge_estado(), $MAgente->getAge_cidade());         
    }
    
}
