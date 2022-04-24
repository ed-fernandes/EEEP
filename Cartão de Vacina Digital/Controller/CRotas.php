<?php
require_once'../../Model/MRotas.php';

class CRotas {
      function SalvarRotas($rot_fk_age, $rot_desI,$rot_desF) {
         $MRotas = new MRotas(null, $rot_fk_age ,$rot_desI, $rot_desF);
         $MRotas->SalvarRotas($MRotas->getRot_fk_age(), $MRotas->getRot_desI(),$MRotas->getRot_desF());        
    }
        
       function pesquisarRotasID($busca) {
        $MRotas = new MRotas(null, 0,0);
        $result = $MRotas->pesquisarRotasID($busca);
        return $result;
    }
    
}
