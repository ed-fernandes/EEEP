
<?php
include "../../Controller/CVacinacao.php";
$CVacinacao = new CVacinacao();
$CPopulacao = new CPopulacao();
$CVacina = new CVacina();
?>

<div class="py-5 header-site2" id="Vacina">
    <div class="my-5 container section-aquamarine">
        <div class="row mx-auto">
            <div class="col-md-12">
                <h1 class="mt-4 mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start"> Cadastro de vacinação  </h1> 
                Pesquise o cidadão:
                <form name="formvacinacao" method="POST" <?php echo "action=?acao=$acao"; ?>>  
                    <input type="button" value="Pesquisar Pessoa" class='btn btn-warning' data-toggle='modal' data-target='#pesquisarVacinacao'>  
                </form>
                <br>

                <?php
                if (isset($_POST['campo_pesquisaVac'])) {
                    $campo_pesquisa = $_POST['campo_pesquisaVac'];
                    $result = $CPopulacao->pesquisarPopulacao($campo_pesquisa);
                                        
                    //Trazer vacinas
                  
                    if (mysqli_num_rows($result) > 0) {
                        echo "<h2>Dados encontrados </h2>";                        
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='40%'>População</th>
                            <th width='30%'>Vacina</th>
                            <th>Data</th>
                            <th>Salvar Vacinação</th>
                        </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo "<form name='form2'  method='POST' action=?acao=SalvarVacinacao> <tr> <td><b><input type='hidden' name='fk_pop_id' value='".$row['pop_id']."'>" . $row["pop_nome"] . "</b> <br></td>";     
                           echo"<td><select name='vac_id' class='form-control '>";    
                             $ResultadosVacinas = $CVacina->pesquisarTodas();                  
                              while ($rowV = $ResultadosVacinas->fetch_assoc()) {
                                $teste = $rowV['vac_id'];      
                                 echo "<option  value='".$rowV['vac_id']."'> ".$rowV['vac_nome']."</option>";
                                         

                              }
echo "</select></td>";                              
                                                         echo "<td><input type='date' name='inj_data' class='form-control'></td><td><input type='submit' class='btn btn-success'></form> </td></tr>";
                        }
                        echo "</table> <br>";
                    } else if (isset($_POST['campo_pesquisa'])) {
                        echo "Nenhum dado encontrado";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
