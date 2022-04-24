<?php
require_once "../../Model/MVisitas.php";
//include "../../View/Agente/Visitas.php";
class CVisitas {
    function SalvarVisita($visi_id_age,$visi_id_pop,$visi_data) {
         $MVisitas = new MVisitas(null, $visi_id_age,$visi_id_pop,$visi_data);
         $MVisitas->SalvarVisita($MVisitas->getVisi_id_age(),$MVisitas->getVisi_id_pop(),$MVisitas->getVisi_data());        
    }
    
       function pesquisarVisitas($busca) {
        $MVisitas = new Mvisitas(null, 0,0);
        $result = $MVisitas->pesquisarVisitas($busca);
        return $result;
    }
    
       function pesquisarVisitasID($busca) {
        $MVisitas = new MVisitas(null, 0,0);
        $result = $MVisitas->pesquisarVisitasID($busca);
        return $result;
    }
    
    
       function pesquisarVisitasData($busca) {
        $MVisitas = new MVisitas(null, 0,0);
        $result = $MVisitas->pesquisarVisitasData($busca);
        return $result;
    }
    
    
      function EditarVisitas($visi_data, $visi_id_pop, $visi_id_age) {
         $MVisitas = new MVisitas(null,$visi_data, $visi_id_pop, $visi_id_age);
         $MVisitas->Editar($MVisitas->getVis_id(),$MVisitas->getVisi_data(), $MVisitas->getVisi_id_pop(), $MVisitas->getVisi_id_age());         
    }
}
