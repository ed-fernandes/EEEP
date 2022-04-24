<?php
//include '../../Controller/CRotas.php';

//include '../../Controller/CAgente.php';
//include "../../Controller/CVisitas.php";
//$CVisitas = new CVisitas();
$CPopulacao = new CPopulacao();
?>

<section class="header-site6">
<div class="" id="Rotas">
    <div class="my-5 container section-aquamarine animate-in-left">
        <div class="row">
            <div class="col-md-12 animate-in-down">
            <h1 class="text-white mt-4">Visitas</h1>
            <form name="formVisita" method="POST" action='index.php?acao=salvarVisitas'>
               Pesquise População:<br> 
                     <input type='button' value='Pesquisar População' class='btn btn-warning' data-toggle='modal' data-target='#pesquisarPOP'>
                     
                     <br>
                     <br>

                     <?php

                if (isset($_POST['campo_pesquisa_pop'])) {
                    $campo_pesquisa_age = $_POST['campo_pesquisa_pop'];
                    $result = $CPopulacao->pesquisarPopulacao($campo_pesquisa_age);

                    if (mysqli_num_rows($result) > 0) {
                        echo "<h2>Dados encontrados </h2>";
                        echo "Foi(foram) encontrado(s) " . mysqli_num_rows($result) . " dado(s)";
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='20%'>Dados Pessoais</th>  
                            <th width='20%'>Data da Visita</th>                     
                            <th width='20%'>Salvar Visita</th>
                        </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo 
                             "<form name='formVisita'  method='POST' action='index.php?acao=salvarVisitas'> 
                             <tr> <td><b><input type='hidden' name='pop_id' value='".$row['pop_id']."'>"
                                . $row["pop_nome"] . "</b></td>"                           
                                     . "<td><input type='date' name='vis_data' class='form-control'></td><td><input type='submit' value='Salvar Visita' class='btn btn-success'></form> </td></tr>";
                           

                             

                        }
                                     

                        echo "</table> <br>";

                         
                            echo   "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.5853069504396!2d-39.30770321189382!3d-4.346915262554508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bf07711a348095%3A0xfc31fc0bb3abd963!2sPSF+-+CONJUNTO+HABITACIONAL!5e0!3m2!1spt-PT!2sbr!4v1542460827465' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>"; 
                               
                    } else if (isset($_POST['campo_pesquisa_pop'])) {
                        echo "Nenhum dado encontrado";
                    }
                }
                echo "<br>";
                ?>
 

                </form>
              </div>

        </div>        
    </div>
</div>  
</section>

            

   
