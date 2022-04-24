<?php 
require_once ("conexao.php");
//session_start();

//$a =  $_SESSION['psf_id'];
$html = '<table border =0.1 style="HEIGHT:20%;WIDTH:100%;"';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td><h3>Nome do Agente</h3></td>';
$html .= '<td><h3>Login</h3></td>';
$html .= '<td><h3>Senha</h3></td>';
$html .= '<td><h3>Nome Posto</h3></td>';
$html .= '</tr>';
$html .= '</thead>';

$result_trans = "Select age_nome, age_login,age_senha,psf_login from tb_agente JOIN tb_psf ON tb_agente.fk_psf_id = tb_psf.psf_id where tb_psf.psf_id  order by age_nome asc";

$resultado_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado_trans)) {
	$html .= '<tbody style ="text-align: center;">';
	$html .= '<tr><td  style ="text-align: center;"><h4>'.$linha['age_nome']."</h4></td>";
	$html .= '<td><h4>'.$linha['age_login']."</h4></td>";
	$html .= '<td><h4>'.$linha['age_senha']."</h4></td>";
	$html .= '<td><h4>'.$linha['psf_login']."</h4></td></tr>";
	$html .= '</tbody>';
}

$html .= '</table';

use Dompdf\Dompdf;

 require_once 'dompdf/autoload.inc.php';

 $dompdf = new DomPdf();
 

//criando html
 $dompdf->load_html('
 	<h1 style ="text-align: center;">Dados do Agente</h1>
 	'. $html .'
 	');


//renderizar o html
 $dompdf->render();

 //exibir pag
 $dompdf->stream(
 	"relatorio teste",
 	array(
 		"Attachment" => false 
 	
 	)

 		


 );

?>