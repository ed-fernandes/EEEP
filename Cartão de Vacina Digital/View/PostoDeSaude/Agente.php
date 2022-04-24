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
<section id="Agente" class="header-site5">
     <!--<div class="my-5 bg-light p-4 container animate-in-left">-->
        <div class="my-5 container section-aquamarine">
        <div class="row mx-auto">
            <div class="col-md-12 animate-in-down">
                <h1 class="mt-4 mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start"> Agentes de Saúde </h1> 

                <form name="formAge" method="POST" action="index.php?acao=<?=$acao?>" >                     
                    <?php if(isset($age_id)){?>
                    <input type="hidden" name="age_id" class="form-control my-2" value="<?=$age_id?>">
                    <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="text-center">Nome Completo</h5>
                            <input type="text" name="age_nome" placeholder="Nome completo" required="" autofocus class="form-control my-2" value="<?=$age_nome?>">
                        </div>

                        <div class="col-md-4">
                            <h5 class="text-center">Login do Agente</h5>
                            <input type="text" name="age_login" placeholder="Nome de usuário" required="" class="form-control my-2" value="<?=$age_login?>">
                        </div>
                        
                        <div class="col-md-4">
                            <h5 class="text-center">Senha</h5>
                            <input type="password" name="age_senha" placeholder="Senha" required="" class="form-control my-2" value="<?=$age_senha?>">
                        </div>
                    </div>
                     
                    <br>

                    <h5 class="text-center">Selecione o Estado</h5>

                    <select  onchange="monta_select(this.value);" name="estados" class="form-control my-2"> </select> <br>
                    <h5 class="text-center">Selecione a Cidade</h5>
                    <select name="cidades" class="form-control my-2"></select><br>
                    <input type="submit" value="<?php echo $valorBotao; ?>" class="btn btn-success">
                    <button onclick="location.href = 'index.php#Agente'" type="button" class='btn btn-warning'> Limpar Formulário</button>
                    <input type="button" value="Pesquisar Agente de Saúde" class='btn btn-warning' data-toggle='modal' data-target='#pesquisarAgente'>  
                </form>


                <br>

                <?php
                if (isset($_POST['campo_pesquisa_agt'])) {
                    $campo_pesquisa_agt = $_POST['campo_pesquisa_agt'];
                    $result_age = $CAgente->pesquisarAgentePsf($campo_pesquisa_agt , $_SESSION['psf_id']);
                    
                    if (mysqli_num_rows($result_age) > 0) {
                        echo "<h2>Dados encontrados </h2>";
                        echo "Foi(foram) encontrado(s) " . mysqli_num_rows($result_age) . " dado(s)";
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='30%'>Dados Pessoais</th>   
                            <th width='20%'>Editar dados</th>
                           
                        </tr> ";
                        while ($row = $result_age->fetch_assoc()) {
                            echo "<tr> <td><b>" . $row["age_nome"] . "</b> <br>"
                            . "<br> " . $row["age_login"]
                            . "<br> " . $row["age_senha"] . "</td>"
                            . "<td><a href='?idAgente=" . $row["age_id"] . "' class='btn btn-warning btn-lg'> <img src='../imagens/editar.png' width='75%'>  </a> </td>";
                     

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
</section>