 <?php
 include "../../Controller/CPopulacao.php";
include 'modais.php';
 echo "<section id='pesquisar'  class='py-5 header-site4'>
    <div class='my-5 container section-aquamarine animate-in-left'>       
        <div class='row mx-auto'>   
            <div class='col-md-12'>
                <h1 class='mt-4 mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start'>
                    Verificar Dados </h1>
                <form method='POST' action='#pesquisar'>
                    <input type='text' name='campo_pesquisa' placeholder='Digite aqui' required='' class='form-control my-2'>                         
                    <div class='funkyradio'>
                        <div class='funkyradio-success'>
                            <input type='radio' name='tipo' id='radio1' value='1' checked/>
                            <label for='radio1'>Nome completo</label>
                        </div>
                     
                        <div class='funkyradio-success'>
                            <input type='radio' name='tipo' id='radio3' value='3' />
                            <label for='radio3'>Bairro</label>
                        </div>
                    </div> <br>                    
                    <input type='submit' value='Pesquisar Dados da População' class='btn btn-success'>
                    
            
                </form>
                <br/>
                
                ";
                //Verifica se existe algum valor no campo_pesquisa e se existe faz uma pesquisa pelo pop_nome, pop_log ou pop_bairro
                if (isset($_POST['campo_pesquisa'])) {
                   $CPopulacao = new CPopulacao();
                    $result = $CPopulacao->pesquisarPopulacao($_POST['campo_pesquisa'], $_POST['tipo']);
                    
                   //Se o valor pesquisado for maior que zero ou existe na tb_populacao então mostre os dados Encontrados
                    if (mysqli_num_rows ($result) > 0) {
                       echo "Foi(foram) encontrado(s) ". mysqli_num_rows ($result). " dado(s)";
                        echo "<h2>Dados encontrados </h2>
                    <table class='table table-striped'>
                        <tr>  
                            <th width='70%'>Dados Pessoais</th>   
                      
                            <th>Visualizar ficha</th>
                        </tr> ";

                    while ($row = $result->fetch_assoc()) {

                        //Valores Mostrados da pesquisa
                        echo 
                        "<tr> <td><b>" . $row["pop_nome"] . "</b> <br>"
                        . $row["pop_logradouro"]. " ". $row["pop_nome_logradouro"].", ". $row["pop_num"]." - ". $row["pop_bairro"]." - ". $row["pop_cidade"]." - ". $row["pop_estado"]
                        . "<br> " . $row["pop_pai"] 
                        . "<br> " . $row["pop_mae"]. "</td>"
                          //Botão ou th que tem a função de salvar as Visitas no Banco de Dados pegando o id do agente e da populacao pesquisada
                            

                          //Botão que Verifica a ficha e informação abrindo um modal que te o id ficha
                        . "<td><a href=''class='btn btn-success btn-lg' data-toggle='modal' data-target='#ficha" . $row["pop_id"] . "'> <img src='../imagens/ficha.png' width='75%'></a></td></tr>";
                         //Modal que Verifica a Ficha de informações da vacina do pop_nome pesquisado
                        echo "<div id='ficha" . $row["pop_id"] . "' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $row["pop_nome"] . "</h4>
                                                <form method = 'POST' action ='GerarPDF.php'>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        </div>
                                        <div class='modal-body'>

                                        </div>
                                          <div class='modal-footer'>
                                           <button type='submit' class='btn btn-default' data-dismiss='modal'>Gerar PDF</button>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>";
                        
                
         
 }
                     echo "</table>"; 
                    
                    

                     
                 }
               
            }
                else {
                    echo "Nenhum dado encontrado";
                    
                }
            
                
                ?>
            </div>
        </div>
    </div>
</section>