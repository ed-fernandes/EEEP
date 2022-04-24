<?php
include "../../Model/MVacina.php";

class CVacina{
  
    function CadastrarVac($vac_nome, $vac_min, $vac_max) {
         $MVacina = new MVacina(null, $vac_nome, $vac_min, $vac_max);
         $MVacina->CadastrarVac($MVacina->getVac_nome(),$MVacina->getVac_min(),$MVacina->getVac_max());         
    }
    
       function pesquisarVac($busca) {
        $MVacina = new MVacina(null, null,null,null);
        $result = $MVacina->pesquisarVac($busca);
        return $result;
    }
    function vacinasDisponiveis() {
        $MVacina = new MVacina(null, null,null, null);
        return $MVacina->vacinasDisponiveis();
    }
    function pesquisarTodas() {
        $MVacina = new MVacina(null, null,null,null);
        $result = $MVacina->pesquisarTodas();
        return $result;
    }

    function pesquisarVacID($busca) {
        $MVacina = new MVacina(null, null,null,null);
        $result = $MVacina->pesquisarVacID($busca);
        return $result;
    }
    
      function  EditarVac($vac_id, $vac_nome,$vac_min,$vac_max) {
         $MVacina = new MVacina($vac_id, $vac_nome,$vac_min,$vac_max);
         $MVacina->EditarVac($MVacina->getVac_id(),$MVacina->getVac_nome(),$MVacina->getVac_min(),$MVacina->getVac_max());         
    }
    
}

?>