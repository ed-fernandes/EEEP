<?php
require_once "../../Controller/CPsf.php";
$CPsf = new CPsf();
if (isset($_GET['idPsf'])) {
    $result = $CPsf->pesquisarPsfID($_GET['idPsf']);
    while ($row = $result->fetch_assoc()) {
        $psf_id = $row['psf_id'];
        $psf_login = $row['psf_login'];
        $psf_senha = $row['psf_senha'];
        $acao = "EditarPsf";
        $valorBotao = "Editar Posto de Saúde";
    }
} else {
  $psf_id = null;
    $psf_login = null;
    $psf_senha = null;
    $acao = "SalvarPsf";
    $valorBotao = "Salvar Posto De saúde";
}
?>
<section class="header-site6" id="PSF">
    <div class="my-5 p-4 container animate-in-left section-aquamarine">
        <div class="row mx-auto">
            <div class="col-md-12">
                <h1 class="mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start"> Unidade Básica de Saúde  </h1>  
                <form name="form2" method="POST"  action="index.php?acao=<?=$acao?>">                     
                   
                     <input type="hidden" name="psf_id" placeholder="*****" required="" class="form-control my-2" 
                    <?php
                    if ($psf_id != null) {
                        echo "  value=" . $psf_id . "";
                    }
                    ?> >
                    <br>
                    
                    
                   <input type="text" name="psf_login" placeholder="Nome Da Unidade Básica de Saúde" required="" class="form-control my-2" 
                    <?php
                    if ($psf_login != null) {
                        echo "  value=" . $psf_login . "";
                    }
                    ?> >
                    <br>
                    
                    <input type="password" name="psf_senha" placeholder="Senha" required="" class="form-control my-2"  <?php
                    if ($psf_senha != null) {
                        echo "  value=" . $psf_senha . "";
                    }
                    ?> > <br>                 
                   
                    <input type="submit" value="<?php echo $valorBotao; ?>" class="btn btn-success">
                    <button onclick="location.href = 'index.php#Psf'" type="button" class='btn btn-warning'> Limpar Formulário</button>
                    <input type="button" value="Pesquisar Posto de saúde" class='btn btn-warning' data-toggle='modal' data-target='#pesquisarPsf'>  
                </form>
                <br>

                <?php
                if (isset($_POST['campo_pesquisa'])) {
                    $campo_pesquisa = $_POST['campo_pesquisa'];
                    $result = $CPsf->pesquisarPsf($campo_pesquisa);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<h2>Dados encontrados </h2>";
                        echo "Foi(foram) encontrado(s) " . mysqli_num_rows($result) . " dado(s)";
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='70%'>Dados Pessoais</th>   
                            <th>Editar dados</th>
                            <th>Visualizar ficha</th>
                        </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr> <td><b>" . $row["psf_login"] . "</b> <br>"
                            . "<br> " . $row["psf_login"]
                            . "<br> " . $row["psf_senha"] . "</td>"
                            . "<td><a href='?idPsf=" . $row["psf_id"] . "' class='btn btn-warning btn-lg'> <img src='../imagens/editar.png' width='75%'>  </a> </td>"
                            . "<td><a href='' class='btn btn-success btn-lg' data-toggle='modal' data-target='#ficha" . $row["psf_id"] . "'> <img src='../imagens/ficha.png' width='75%'></a></td></tr>";

                            echo "<div id='ficha" . $row["psf_id"] . "' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $row["psf_login"] . "</h4>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Informações do Agente</p>
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
                       
                    } else {
                        echo "Posto não encontrado não Encontrado";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
