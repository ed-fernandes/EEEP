

<?php 
require_once ("conexao.php");
session_start();

$a =  $_SESSION['age_id'];
$html = '<table border =0.1';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td><h3>Nome da pessoa</h3></td>';
$html .= '<td><h3>Nome Logradouro</h3></td>';
$html .= '<td><h3>Número da casa</h3></td>';
$html .= '<td><h3>Nome da mãe</h3></td>';
$html .= '<td><h3>Data da visita</h3></td>';
$html .= '</tr>';
$html .= '</thead>';

$result_trans = "Select pop_nome, pop_nome_logradouro,pop_num, pop_mae, vis_data from tb_visita JOIN tb_populacao ON tb_visita.fk_pop_id = tb_populacao.pop_id JOIN tb_agente ON tb_visita.fk_age_id = $a order by pop_nome asc";

$resultado_trans = mysqli_query($conexao, $result_trans );

while ($linha = mysqli_fetch_assoc($resultado_trans)) {
	$html .= '<tbody style ="text-align: center;">';
	$html .= '<tr><td  style ="text-align: center;"><h4>'.$linha['pop_nome']."</h4></td>";
        $html .= '<td><h4>'.$linha['pop_nome_logradouro']."</h4></td>";
        $html .= '<td><h4>'.$linha['pop_num']."</h4></td>";
        $html .= '<td><h4>'.$linha['pop_mae']."</h4></td>";
	$html .= '<td><h4>'.$linha['vis_data']."</h4></td></tr>";
	$html .= '</tbody>';
}

$html .= '</table';

use Dompdf\Dompdf;

 require_once 'dompdf/autoload.inc.php';

 $dompdf = new DomPdf();
 

//criando html
 $dompdf->load_html('
 	<h1 style ="text-align: center;">Dados da visita</h1>
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