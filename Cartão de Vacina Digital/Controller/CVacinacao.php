<?php
include "../../Model/MVacinacao.php";

class CVacinacao {

   function pesquisarVacinadao($pes_id) {
        $MVacinacao = new MVacinacao($pes_id, null, null);
        $result = $MVacinacao->pesquisarVacinacao($pes_id);
        return $result;
    }
   
    
}
