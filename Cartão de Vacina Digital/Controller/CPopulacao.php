<?php
include "../../Model/MPopulacao.php";

class CPopulacao {
    function pesquisar($busca, $tipo) {
        $MPopulacao = new MPopulacao("","","", "", "", "", "", "", "", "", "", "", "");
        $result = $MPopulacao->pesquisar($busca, $tipo);
        return $result;
    }
}
