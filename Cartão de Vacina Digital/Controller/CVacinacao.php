<?php
include "../../Model/MVacinacao.php";

class CVacinacao {

   function pesquisarVacinacao($pes_id) {
        $MVacinacao = new MVacinacao($pes_id, null, null,null);
        $result = $MVacinacao->pesquisarVacinacao($pes_id);
        return $result;
    }
     function CadastrarVacinacao($fk_vac_id, $fk_pop_id, $inj_data) {
         $MVacinacao = new MVacinacao(null, $fk_vac_id, $fk_pop_id, $inj_data);
         $MVacinacao->CadastrarVacinacao($MVacinacao->getFk_vac_id(),$MVacinacao->getFk_pop_id(),$MVacinacao->getInj_data());      
    }
    
}
