<?php 
require_once ("conexao.php");
session_start();

$a =  $_SESSION['psf_id'];
$html = '<table border =0.1';
$html .= '<thead style ="text-align: center;">';
$html .= '<tr>';
$html .= '<td><h3>Nome da Pessoa</h3></td>';
$html .= '<td><h3>Login</h3></td>';
$html .= '<td><h3>Senha</h3></td>';
$html .= '<td><h3>Data de Nascimento</h3></td>';
$html .= '<td><h3>Logradouro</h3></td>';
$html .= '<td><h3>Nome do Logradouro</h3></td>';
$html .= '<td><h3>Bairro</h3></td>';
$html .= '<td><h3>Número</h3></td>';
$html .= '</tr>';
$html .= '</thead>';

$result_trans = "Select * from tb_populacao JOIN tb_psf ON tb_populacao.psf_id = tb_psf.psf_id where tb_psf.psf_id = $a order by pop_nome asc";

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