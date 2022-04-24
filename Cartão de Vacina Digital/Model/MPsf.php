<?php  
require_once 'conexao.php';
class Mpsf{
 private $psf_login;
 private $psf_senha;
 private $psf_id;
   function __construct($psf_id, $psf_login, $psf_senha){
        $this->psf_id = $psf_id;
        $this->psf_login = $psf_login;
        $this->psf_senha = $psf_senha;
        
    }
 function getPsf_login() {
     return $this->psf_login;
 }

 function getPsf_senha() {
     return $this->psf_senha;
 }

 function getPsf_id() {
     return $this->psf_id;
 }

 function setPsf_login($psf_login) {
     $this->psf_login = $psf_login;
 }

 function setPsf_senha($psf_senha) {
     $this->psf_senha = $psf_senha;
 }

 function setPsf_id($psf_id) {
     $this->psf_id = $psf_id;
 }

  function  salvar($psf_login,$psf_senha){
     $sql = "INSERT INTO tb_psf (psf_login, psf_senha) VALUES ('$psf_login','$psf_senha');";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
     
     
 }
 function  editar($psf_id,$psf_login,$psf_senha ){
    $sql = "UPDATE `tb_psf` SET  `psf_login` = '$psf_login', `psf_senha` = '$psf_senha' WHERE `tb_psf`.`psf_id` = $psf_id;";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
     
     
 }
            
         function pesquisarPsf($busca) {
  
        $sql = "Select * from tb_psf where psf_login like '%$busca%'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
    
        
         function pesquisarPsfID($busca) {
        $sql = "Select * from tb_psf where psf_id = '$busca'"; 
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $result;   
    }
}





?>
