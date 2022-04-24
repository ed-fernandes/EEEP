<?php
//include '../../Controller/CRotas.php';

//include '../../Controller/CAgente.php';
$CAgente = new CAgente();
?>

<section class="header-site6">
<div class="" id="Rotas">
    <div class="container section-aquamarine">
        <div class="row">
            <div class="col-md-12 animate-in-down">
            <h1 class="text-white mt-4">Rotas</h1>
            <form name="formRotas" method="POST" action='index.php?acao=SalvarRotas'>
               Pesquise o Agente:<br> 
                     <input type='button' value='Pesquisar Agente' class='btn btn-warning' data-toggle='modal' data-target='#pesquisarAgt'>
                     <br>
                     <br>

                     <?php

                if (isset($_POST['campo_pesquisa_age'])) {
                    $campo_pesquisa_age = $_POST['campo_pesquisa_age'];
                    $result = $CAgente->pesquisarAgentePsf($campo_pesquisa_age , $_SESSION['psf_id']);

                    if (mysqli_num_rows($result) > 0) {
                        echo "<h2>Dados encontrados </h2>";
                        echo "Foi(foram) encontrado(s) " . mysqli_num_rows($result) . " dado(s)";
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='20%'>Dados Pessoais</th>  
                            <th width='20%'>Destino Inicial</th>
                            <th width='20%'>Destino Final</th> 
                            <th width='20%'>Salvar Rotas</th>
                            
                        </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo 
                             "<form name='form2'  method='POST' action='index.php?acao=SalvarRotas'> 
                             <tr> <td><b><input type='hidden' name='rot_fk_age' value='".$row['age_id']."'>"
                                . $row["age_nome"] . "</b></td>"                             
                                . "<td><b><input type='textarea' name='campo_desI' placeholder='Destino inicial' required='' class='form-control '><br></td>"
                                . "<td><b><input type='textarea' name='campo_desF' placeholder='Destino final' required='' class='form-control '><br></td>"  
                             . "<td><input type='submit' value='Salvar Rota' class='btn btn-success'></form></td>";

                             

                        }
                                     

                        echo "</table> <br>";

                         
                            echo   ""; 
                               
                    } else if (isset($_POST['campo_pesquisa_age'])) {
                        echo "Nenhum dado encontrado";
                    }
                }
                echo "<br>";
                ?>
                <div class="container">
                  <div class="col-12">
                    <div class="row">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.5853069504396!2d-39.30770321189382!3d-4.346915262554508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bf07711a348095%3A0xfc31fc0bb3abd963!2sPSF+-+CONJUNTO+HABITACIONAL!5e0!3m2!1spt-PT!2sbr!4v1542460827465" width="1100" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                      <br>
                      <br>
                    </div>

                  </div>
                </div>
 

                </form>
              </div>

        </div>        
    </div>
</div>  
</section>

            

   
