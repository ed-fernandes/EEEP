<?php
require_once '../../Model/MPopulacao.php';

class CPopulacao {
   
function login($pop_login, $pop_senha) {
        $MPopulacao = new MPopulacao("", "", "", "", "", "", "", "", "", "", "", "", "","");
        $result = $MPopulacao->login($pop_login, $pop_senha);
        return $result;
    }
    
    function CadastrarPopulacao($pop_nome, $pop_data_nascimento, $pop_pai, $pop_mae, $pop_logradouro,$pop_nome_log,$pop_num,$pop_bairro,$pop_estado,$pop_cidade,$pop_login,$pop_senha, $psf_id) {
         $MPopulacao = new MPopulacao(null, $pop_nome,$pop_data_nascimento,$pop_pai ,$pop_mae,$pop_logradouro,$pop_nome_log,$pop_num,$pop_bairro,$pop_estado, $pop_cidade, $pop_login, $pop_senha,$psf_id);
         $MPopulacao-> CadastrarPopulacao($MPopulacao->getPop_nome(),$MPopulacao->getPop_data_nascimento() ,$MPopulacao->getPop_pai()
                 ,$MPopulacao->getPop_mae(),$MPopulacao->getPop_logradouro() ,$MPopulacao->getPop_nome_log(),$MPopulacao->getPop_num() ,$MPopulacao->getPop_bairro(),
                 $MPopulacao->getPop_estado(),$MPopulacao->getPop_cidade(),$MPopulacao->getPop_login(), $MPopulacao->getPop_senha(), $MPopulacao->getPsf_id());         
    }
    function pesquisarPopulacao($busca) {
        $MPopulacao = new MPopulacao("","","", "", "", "", "", "", "", "", "", "", "","");
        $result = $MPopulacao->pesquisarPopulacao($busca);
        return $result;
    }
    function pesquisarPopulacaoAgente($busca) {
        $MPopulacao = new MPopulacao("","","", "", "", "", "", "", "", "", "", "", "","");
        $result = $MPopulacao->pesquisarPopulacaoAgente($busca);
        return $result;
    }
       function pesquisarPopulacaoID($busca) {
        $MPopulacao = new MPopulacao(null, null, null, null, null, null,null,null,null,null,null,null,null,null);
        $result = $MPopulacao->pesquisarPopulacaoID($busca);
        return $result;
    }
    
    
      function EditarPopulacao($pop_id, $pop_nome, $pop_data_nascimento, $pop_pai, $pop_mae, $pop_logradouro,$pop_nome_log,$pop_num,$pop_bairro,$pop_estado,$pop_cidade,$pop_login,$pop_senha) {
         $MPopulacao = new MPopulacao($pop_id,$pop_nome, $pop_data_nascimento, $pop_pai, $pop_mae, $pop_logradouro,$pop_nome_log,$pop_num,$pop_bairro,$pop_estado,$pop_cidade,$pop_login,$pop_senha,null);
         $MPopulacao->EditarPopulacao($MPopulacao->getPop_id(),$MPopulacao->getPop_nome(),$MPopulacao->getPop_data_nascimento() ,$MPopulacao->getPop_pai()
                 ,$MPopulacao->getPop_mae(),$MPopulacao->getPop_logradouro() ,$MPopulacao->getPop_nome_log(),$MPopulacao->getPop_num() ,$MPopulacao->getPop_bairro(),
                 $MPopulacao->getPop_estado(),$MPopulacao->getPop_cidade(),$MPopulacao->getPop_login(), $MPopulacao->getPop_senha(),null);         
    }
    function  pesquisarPOPIdade($pop_id){
        $MPopulacao = new MPopulacao(null, null, null, null, null, null,null,null,null,null,null,null,null,null);
        $result = $MPopulacao->pesquisarPOPIdade($pop_id);
        return $result;
    }
        function log($m) {
         echo "<script>console.log(".json_encode($m).")</script>";
    }
//    
    }
?>