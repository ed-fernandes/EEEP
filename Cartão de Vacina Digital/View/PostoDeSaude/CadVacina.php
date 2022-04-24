<?php
include "../../Controller/CVacina.php";
$CVacina = new CVacina();
$valorBotao = "Não Existente";
if (isset($_GET['idVacina'])) {
    $result = $CVacina->pesquisarVacID($_GET['idVacina']);
    while ($row = $result->fetch_assoc()) {
        $vac_id = $row['vac_id'];
        $vac_nome = $row['vac_nome'];
        $vac_min = $row['vac_min'];
        $vac_max = $row['vac_max'];
        $acao = "EditarVac";
        $valorBotao = "Editar Vacina";
    }
} else {
    $vac_nome = null;
    $vac_min = null;
    $vac_max = null;
    $acao = "CadastrarVac";
    $valorBotao = "Salvar Vacina";
}
?>
<div class="py-5 header-site2" id="Vacina">
     <!--<div class="my-5 bg-light p-4 container animate-in-left">-->
        <div class="my-5 container section-aquamarine">
        <div class="row mx-auto">
            <div class="col-md-12 animate-in-down">
                <h1 class="mt-4 mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start"> Cadastro de vacinas  </h1>  
                <form name="formvac" method="POST" <?php echo "action=?acao=$acao"; ?>>                     
                    <input type="hidden" name="vac_id" class="form-control my-2" <?php
                    if (isset($_GET['idVacina'])) {
                        echo "  value=" . $vac_id . "";
                    }
                    ?> >
                    <h5 class="mb-3 col-md-8" >Nome da Vacina</h5>
                    <input type="text" name="vac_nome" placeholder="Nome da Vacina" required="" class="form-control my-2" 
                    <?php
                    if ($vac_nome != null) {
                        echo "  value=" . $vac_nome . "";
                    }
                    ?> >
                    <br>
                     <div class="col-md-12">
                            <div class="row">
                                 <h5 class="mb-3 col-md-12" >Idade Minima</h5>
                                <div class="col-md-10">
                                    <input type="number" name="vac_min" placeholder="Minimo" required="" class="form-control my-2" 
                                <?php
                                if ($vac_min != null) {
                                    echo "  value=" . $vac_min . "";
                                }
                                ?> >
                            </div>
                            <div class="col-md-2">
                                  <select class="form-control my-2" name="Min">
                                    <?php
                                        if ($vac_min != null) {
                                        echo "<option>" . $vac_min . "</option>";
                                    }
                                    ?> 
                                    <option value="0">Ao Nascer</option>
                                    <option value="1">Meses</option>
                                    <option value="2">Anos</option>
>
                                </select>   
                            </div>
                        </div>                           
                    </div>
                    <div class="col-md-12">
                            <div class="row">
                                 <h5 class="mb-3 col-md-12" >Idade Máximo</h5>
                                <div class="col-md-10">
                                    <input type="number" name="vac_max" placeholder="Maximo" required="" class="form-control my-2" 
                                <?php
                                if ($vac_max != null) {
                                    echo "  value=" . $vac_max . "";
                                }
                                ?> >
                            </div>
                            <div class="col-md-2">
                                <select class="form-control my-2" name="Max">
                                    <?php
                                        if ($vac_max != null) {
                                        echo "<option>" . $vac_max . "</option>";
                                    }
                                    ?>                                     
                                      <option value="3">Ao Nascer</option>
                                      <option value="4">Meses</option>
                                      <option value="5">Anos</option>

                                </select>   
                            </div>
                        </div>
                            
                    </div>
                    <br>  
                    <br>         
                    <input type="submit" value="<?php echo "$valorBotao"; ?>" class="btn btn-success">
                    <button onclick="location.href = 'index.php#Vacina'" type="button" class='btn btn-warning'> Limpar Cadastro de Vacinas</button>
                    <input onclick="location.href = '#Vacina'" type="button" value="Pesquisar Vacina" class='btn btn-warning' data-toggle='modal' data-target='#pesquisarVac'>  
                </form>
                <br>
                
                <?php
                if (isset($_POST['campo_pesquisa_vac'])) {
                    echo 'chegou no campo pesquisa';
                    $campo_pesquisa_vac = $_POST['campo_pesquisa_vac'];
                    $result = $CVacina->pesquisarVac($campo_pesquisa_vac);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<h2>Dados encontrados </h2>";
                        echo "Foi(foram) encontrada(s) " . mysqli_num_rows($result) . " vacinas(s)";
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='70%'>Dados da vaciana</th>   
                            <th>Editar dados</th>
                         
                        </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr> <td><b>" . $row["vac_nome"] . "</b> <br>"
                          
                            . "<td onclick='location.href = '#Vacina'><a href='?idVacina=" . $row["vac_id"] . "' class='btn btn-warning btn-lg'> <img src='../imagens/editar.png' width='75%'>  </a> </td>";
                            

                            echo "<div id='ficha" . $row["vac_id"] . "' class='modal fade' role='dialog'>
                                <div class='modal-dialog' >
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $row["vac_nome"] . "</h4>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Informações Da Vacina</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Gerar PDF</button>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
                        echo "</table> <br>";
                       
                     }else if (isset($_POST['campo_pesquisa_vac'])) {
                        echo "Nenhum dado encontrado";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>