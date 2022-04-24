<?php 
require_once ("conexao.php");
$html = '<table border =0.1';
$html .= '<thead style ="text-align: center;">';
$html .= '<tr>';
$html .= '<td><h5>Nome da Pessoa</h5></td>';
$html .= '<td><h5>Login</h5></td>';
$html .= '<td><h5>Senha</h5></td>';
$html .= '<td><h5>Data de Nascimento</h5></td>';
$html .= '<td><h5>Logradouro</h3></td>';
$html .= '<td><h5>Nome do Logradouro</h5></td>';
$html .= '<td><h5>Bairro</h5></td>';
$html .= '<td><h5>Nome Posto</h5></td>';
$html .= '<td><h5>Número</h5></td>';
$html .= '</tr>';
$html .= '</thead>';

$result_trans = "Select * from tb_populacao JOIN tb_psf ON tb_populacao.psf_id = tb_psf.psf_id where tb_psf.psf_id order by pop_nome asc";

$resultado_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado_trans)) {
	$html .= '<tbody style ="text-align: center;">';
	$html .= '<tr style ="text-align: center;"><td><h4>'.$linha['pop_nome']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_login']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_senha']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_data_nascimento']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_logradouro']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_nome_logradouro']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_bairro']."</h4></td>";
	$html .= '<td><h4>'.$linha['psf_login']."</h4></td>";
	$html .= '<td><h4>'.$linha['pop_num']."</h4></td></tr>";
	$html .= '</tbody>';
}

$html .= '</table';

use Dompdf\Dompdf;

 require_once 'dompdf/autoload.inc.php';

 $dompdf = new DomPdf();
 

//criando html
 $dompdf->load_html('
 	<h1 style ="text-align: center;">Dados da população</h1>
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