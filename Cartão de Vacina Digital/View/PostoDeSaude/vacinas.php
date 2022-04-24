<?php 
require_once ("conexao.php");
$html = '<table  border =0.1 ';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td><h3>Nome da vacina</h3></td>';
$html .= '<td><h3>Quando tomar (Mínimo)</h3></td>';
$html .= '<td><h3>Quando tomar (Máximo)</h3></td>';
$html .= '</tr>';
$html .= '</thead>';

$result_trans = "SELECT * FROM tb_vacina order by vac_nome asc ";

$resultado_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado_trans)) {
	$html .= '<tbody style ="text-align: center;">';
	$html .= '<tr style ="text-align: center;"><td><h4>'.$linha['vac_nome']."</h4></td>";
	$html .= '<td><h4>'.$linha['vac_min']."</h4></td>";
	$html .= '<td><h4>'.$linha['vac_max']."</h4></td></tr>";
	$html .= '</tbody>';
}

$html .= '</table';

use Dompdf\Dompdf;

 require_once 'dompdf/autoload.inc.php';

 $dompdf = new DomPdf();
 

//criando html
 $dompdf->load_html('
 	<h1 style ="text-align: center;">Dados da Vacina</h1>
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