<?php

include "../../Model/MPsf.php";

class CPsf {

    function SalvarPsf($psf_login, $psf_senha) {
        $MPsf = new MPsf(null, $psf_login, $psf_senha);
        $MPsf->Salvar($MPsf->getPsf_login(), $MPsf->getPsf_senha());
    }

    function pesquisarPsf($busca) {
        $MPsf = new MPsf(null, null, 0);
        $result = $MPsf->pesquisarPsf($busca);
        return $result;
    }

    function pesquisarPsfID($busca) {
        $MPsf = new MPsf(null, null, 0);
        $result = $MPsf->pesquisarPsfID($busca);
        return $result;
    }

    function EditarPsf($psf_id, $psf_login, $psf_senha) {
        $MPsf = new MPsf($psf_id, $psf_login, $psf_senha);
        $MPsf->Editar($MPsf->getPsf_id(), $MPsf->getPsf_login(), $MPsf->getPsf_senha());
    }

}

?>