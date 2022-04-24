<?php 
require_once ("conexao.php");
$html = '<table border =1';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td>ID</td>';
$html .= '<td>Nome da Vacina</td>';
$html .= '</tr>';
$html .= '</thead>';

$html2 = '<table border =1';
$html2 .= '<thead>';
$html2 .= '<tr>';
$html2 .= '<td>ID PSF</td>';
$html2 .= '<td>Nome PSF</td>';
$html2 .= '<td>Bairro</td>';
$html2 .= '<td>Rua</td>';
$html2 .= '</tr>';
$html2 .= '</thead>';

$result_trans = "SELECT * FROM tb_vacina order by vac_nome asc";

$resultado_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado_trans)) {
	$html .= '<tbody>';


	$html .= '<tr><td>'.$linha['vac_id']."</td>";
	$html .= '<td>'.$linha['vac_nome']."</td></tr>";
	$html .= '</tbody>';
}


$result2_trans = "SELECT * FROM tb_psf order by psf_nome asc";

$resultado2_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado2_trans)) {
	$html2 .= '<tbody>';
	$html2 .= '<tr><td>'.$linha['psf_id']."</td>";
	$html2 .= '<td>'.$linha['psf_nome']."</td>";
	$html2 .= '<td>'.$linha['psf_bairro']."</td>";
	$html2 .= '<td>'.$linha['psf_rua']."</td></tr>";
	$html2 .= '</tbody>';
}

$html .= '</table';

use Dompdf\Dompdf;

 require_once 'dompdf/autoload.inc.php';

 $dompdf = new DomPdf();
 

//criando html
 $dompdf->load_html('
 	<h1 style ="text-align: center;">Relatório das Vacinas</h1>
 	'. $html .'
 	<h1 style ="text-align: center;">Relatório PSF</h1>
 	'. $html2 .'
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