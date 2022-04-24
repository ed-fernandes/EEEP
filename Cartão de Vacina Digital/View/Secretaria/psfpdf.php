<?php 
require_once ("conexao.php");
$html = '<table border =0.1 style="HEIGHT:10%;WIDTH:100%;"';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td><h3>Nome da UBS</h3></td>';
$html .= '<td><h3>senha</h3></td>';
$html .= '</tr>';
$html .= '</thead>';

$result_trans = "SELECT * FROM tb_psf";

$resultado_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado_trans)) {

	$html .= '<tbody style ="text-align: center;">';
	$html .= '<tr>';
	$html .= '<td  style ="text-align: center;"><h4>'.$linha['psf_login']."</h4></td>";
	$html .= '<td><h4>'.$linha['psf_senha']."</h4></td>";
	$html .= '</tr>';
	$html .= '</tbody>';
}

$html .= '</table';

use Dompdf\Dompdf;

 require_once 'dompdf/autoload.inc.php';

 $dompdf = new DomPdf();
 

//criando html
 $dompdf->load_html('
 	<h1 style ="text-align: center;">Dados da UBS</h1>
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