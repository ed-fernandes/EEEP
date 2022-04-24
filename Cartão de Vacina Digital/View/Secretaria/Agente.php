<?php
include "../../Controller/CAgente.php";
$CAgente = new CAgente();
if (isset($_GET['idAgente'])) {
    $result = $CAgente->pesquisarAgenteID($_GET['idAgente']);
    while ($row = $result->fetch_assoc()) {
        $age_id = $row['age_id'];
        $age_nome = $row['age_nome'];
        $age_login = $row['age_login'];
        $age_senha = $row['age_senha'];
        $age_estados = $row['age_estado'];
        $age_cidades = $row['age_cidade'];
        $acao = "editarAgente";
        $valorBotao = "Editar Agente de Saúde";
    }
} else {
    $age_nome = null;
    $age_login = null;
    $age_senha = null;
    $age_estados = null;
    $age_cidades = null;
    $acao = "salvarAgente";
    $valorBotao = "Salvar Agente de Saúde";
}
?>
<div class="py-5 section-parallax" style="background-image: url(&quot;../imagens/venue.jpg&quot;);" id="Agente">
    <div class="my-5 bg-light p-4 container animate-in-left">
        <div class="row mx-auto">
            <div class="col-md-12">
                <h1 class="mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start"> Agentes de Saúde   </h1>  
                <form name="form" method="POST" <?php echo " action=?acao=$acao"; ?>>                     
                    <input type="hidden" name="age_id" class="form-control my-2" <?php
                    if (isset($_GET['idAgente'])) {
                        echo "  value=" . $age_id . "";
                    }
                    ?> >
                    <input type="text" name="age_nome" placeholder="Nome completo" required="" autofocus class="form-control my-2" 
                    <?php
                    if ($age_nome != null) {
                        echo "  value=" . $age_nome . "";
                    }
                    ?> >
                    <br>
                    <input type="text" name="age_login" placeholder="Nome de usuário" required="" class="form-control my-2" <?php
                    if ($age_login != null) {
                        echo "  value=" . $age_login . "";
                    }
                    ?> > <br>
                    <input type="password" name="age_senha" placeholder="Senha" required="" class="form-control my-2"  <?php
                    if ($age_senha != null) {
                        echo "  value=" . $age_senha . "";
                    }
                    ?> > <br>                 
                    <select  onchange="monta_select(this.value);" name="estados" class="form-control my-2"> </select> <br>
                    <select name="cidades" class="form-control my-2"></select><br>
                    <input type="submit" value="<?php echo $valorBotao; ?>" class="btn btn-success">
                    <button onclick="location.href = 'index.php#Agente'" type="button" class='btn btn-warning'> Limpar Formulário</button>
                    <input type="button" value="Pesquisar Agente de Saúde" class='btn btn-warning' data-toggle='modal' data-target='#pesquisarAgente'>  
                </form>
                <br>

                <?php
                if (isset($_POST['campo_pesquisa'])) {
                    $campo_pesquisa = $_POST['campo_pesquisa'];
                    $result = $CAgente->pesquisarAgente($campo_pesquisa);
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
                            echo "<tr> <td><b>" . $row["age_nome"] . "</b> <br>"
                            . "<br> " . $row["age_login"]
                            . "<br> " . $row["age_senha"] . "</td>"
                            . "<td><a href='?idAgente=" . $row["age_id"] . "' class='btn btn-warning btn-lg'> <img src='../imagens/editar.png' width='75%'>  </a> </td>"
                            . "<td><a href='' class='btn btn-success btn-lg' data-toggle='modal' data-target='#ficha" . $row["age_id"] . "'> <img src='../imagens/ficha.png' width='75%'></a></td></tr>";

                            echo "<div id='ficha" . $row["age_id"] . "' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $row["age_nome"] . "</h4>
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
                       
                    } else if (isset($_POST['campo_pesquisa'])) {
                        echo "Nenhum dado encontrado";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>