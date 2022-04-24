<?php 
if (isset($_GET['idPopulacao'])) {
    $result = $CPopulacao->pesquisarPopulacaoID($_GET['idPopulacao']);
    while ($row = $result->fetch_assoc()) {
        $pop_id = $row['pop_id'];
        $pop_nome = $row['pop_nome'];
        $pop_data_nascimento= $row['pop_data_nascimento'];
        $pop_pai = $row['pop_pai'];
        $pop_mae = $row['pop_mae'];
        $pop_logradouro = $row['pop_logradouro'];
        $pop_nome_log = $row['pop_nome_logradouro'];
        $pop_num = $row['pop_num'];
        $pop_bairro = $row['pop_bairro'];
        $pop_estado = $row['pop_estado'];
        $pop_cidade = $row['pop_cidade'];
        $pop_login = $row['pop_login'];
        $pop_senha = $row['pop_senha'];
          
        $acao = "EditarPopulacao";
        $valorBotao = "Editar Pessoa";
    }
} else {
        $pop_nome = null;
        $pop_data_nascimento= null;
        $pop_pai = null;
        $pop_mae = null;
        $pop_logradouro = null;
        $pop_nome_log = null;
        $pop_num = null;
        $pop_bairro = null;
        $pop_estado = null;
        $pop_cidade = null;
        $pop_login = null;
        $pop_senha = null;
    $acao = "CadastrarPopulacao";
    $valorBotao = "Salvar Pessoa";
}
?>
<section id="Populacao" class="header-site4">

    <!--<div class="my-5 bg-light p-4 container animate-in-left">-->
        <div class="my-5 container section-aquamarine">
        <div class="row mx-auto">
            <div class="col-md-12  animate-in-down">
                <h1 class="mt-4 mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start"> Cadastro de Pessoas  </h1>  
                    <form name="form5" method="POST" action="index.php?acao=<?=$acao?>">                     
                   <?php if(isset($pop_id)){?>
                    <input type="hidden" name="pop_id" class="form-control my-2" value="<?=$pop_id?>">
                    <?php
                    }
                    
                    ?>
                    <div class="row">
                    <div class="col-md-4">
                        <h5 class="">Nome Completo</h5>
                    <input type="text" name="pop_nome" placeholder="Nome completo" required="" class="form-control my-2" 
                    <?php
                    if ($pop_nome != null) {
                        echo "  value='" . $pop_nome . "'";
                    }
                    ?> >
                    </div>
                
                    <div class="col-md-4">
                        <h5 class="">Login do usuário</h5>
                    <input type="text" name="pop_login" placeholder="Nome de usuário" required="" class="form-control my-2" <?php
                    if ($pop_login != null) {
                        echo "  value='" . $pop_login . "'";
                    }
                    ?> > 
                    </div>
                
                    <div class="col-md-4">
                        <h5 class="">Senha</h5>
                    <input type="password" name="pop_senha" placeholder="Senha" required="" class="form-control my-2"  <?php
                    if ($pop_senha != null) {
                        echo "  value=" . $pop_senha . "";
                    }
                    ?> > 
                    </div>
                    </div>
                    
                    <br> 
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="">Data de nascimento</h5>
                        <input type="date" name="pop_data_nascimento" placeholder="Data de nascimento" required="" class="form-control my-2"  <?php
                    if ($pop_data_nascimento != null) {
                        echo "  value='" . $pop_data_nascimento . "'";
                    }
                    ?> >
                    </div>
                    
                    <div class="col-md-4">
                        <h5 class="">Nome do Pai</h5>
                    <input type="text" name="pop_pai" placeholder="Nome do Pai" required="" class="form-control my-2"  <?php
                    if ($pop_pai != null) {
                        echo "  value=" . $pop_pai . "";
                    }
                    ?> > 
                    </div>
                    
                    <div class="col-md-4">
                        <h5 class="">Nome da Mãe</h5>
                     <input type="text" name="pop_mae" placeholder="Nome do Mae" required="" class="form-control my-2"  <?php
                    if ($pop_mae != null) {
                        echo "  value=" . $pop_mae . "";
                    }
                    ?> >
                    </div>
                    </div>
                    <br>
                        <div class="row">
                          <div class="col-md-4">
                            <h5 class="">Logradouro</h5>
                               <select name="pop_logradouro" class="form-control my-2"> 
                                    <?php
                                if ($pop_logradouro != null) {
                                echo "<option>" . $pop_logradouro . "</option>";
                                }
                                ?> 
                                   <option> Opçoes</option>
                                   <option> Aeroporto</option>
                                   <option> Área</option>
                                   <option> Avenida</option>
                                   <option> Campo</option>
                                   <option> Chácara</option>
                                   <option> Colônia</option>
                                   <option> Condomínio</option>
                                   <option> Distrito</option>
                                   <option> Esplanada</option>
                                   <option> Favela</option>
                                   <option> Feira</option>
                                   <option> Jardim</option>
                                   <option> Ladeira</option>
                                   <option> Lago</option>
                                   <option> Lagoa</option>
                                   <option> Loteamento</option>
                                   <option> Morro</option>
                                   <option> Núcleo</option>
                                   <option> Parque</option>
                                   <option>Passarela</option>
                                   <option>Pátio</option>
                                   <option>Praça</option>
                                   <option>Recanto</option>
                                   <option>Residencial</option>
                                   <option>Rodovia</option>
                                   <option>Rua</option>
                                   <option>Setor</option>     
                                   <option>Sítio</option>   
                                   <option>Travessa</option>
                                   <option>Trecho</option>
                                   <option>Trevo</option>
                                   <option>Vale</option>
                                   <option>Vereda</option>
                                   <option>Viaduto</option> 
                                   <option>Viela</option> 
                                   <option>Vila</option> 
                               </select>
                        </div>


                        <div class="col-md-4">
                            <h5 class="">Nome do Logradouro</h5>
                                <input type="text" name="pop_nome_log" placeholder="Nome do Logradouro" required="" class="form-control my-2" <?php
                                if ($pop_nome_log != null) {
                                echo "  value=" . $pop_nome_log . "";
                                }
                                ?> >
                        </div>

                        <div class="col-md-4">
                            <h5 class="">Número da casa</h5>
                                <input type="text" name="pop_num" placeholder="Numero " required="" class="form-control my-2"  <?php
                                if ($pop_num != null) {
                                echo "  value=" . $pop_num . "";
                                }
                                ?> >
                        </div>
                        </div>
                            <br> 
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="">Nome do Bairro</h5>
                                <input type="text" name="pop_bairro" placeholder="Nome do bairro " required="" class="form-control my-2"  <?php
                                if ($pop_bairro != null) {
                                echo "  value=" . $pop_bairro . "";
                                }
                                ?> >
                            </div>

                            <div class="col-md-4">
                                <h5 class="">Selecione o Estado</h5>
                                <select onchange="monta_select(this.value);" name="estados" class="form-control my-2"> </select>
                            </div>

                            <div class="col-md-4">
                                <h5 class="">Selecione a Cidade</h5>
                                <?php
                                echo utf8_encode("<select name='cidades' class='form-control my-2'></select><br>");
                                ?>
                            </div>
                        </div>
                         <br> 
                    
                    <input type="submit" value="<?php echo $valorBotao; ?>" class="btn btn-success">
                    <button onclick="location.href = 'index.php#Populacao'" type="button" class='btn btn-warning'> Limpar Formulário</button>
                    <input  onclick="location.href = '#Populacao'" type="button" value="Pesquisar População" class='btn btn-warning' data-toggle='modal' data-target='#pesquisarPopulacao'> 
                </form>
                <br>

                <?php
                if (isset($_POST['campo_pesquisa_pop'])) {
                    echo 'chegou no campo pesquisa';
                    $campo_pesquisa_pop = $_POST['campo_pesquisa_pop'];
                    $result = $CPopulacao->pesquisarPopulacao($campo_pesquisa_pop);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<h2>Dados encontrados </h2>";
                        echo "Foi(foram) encontrada(s) " . mysqli_num_rows($result) . " pessoas(s)";
                        echo "<table class='table table-striped'>
                        <tr>
                            <th width='70%'>Dados Pessoais</th>   
                            <th>Editar dados</th>
                            <th>Visualizar ficha</th>
                        </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr> <td><b>" . $row["pop_nome"] . "</b> <br>"
                          
                            . "<td><a href='?idPopulacao=" . $row["pop_id"] . "' class='btn btn-warning btn-lg'> <img src='../imagens/editar.png' width='75%'>  </a> </td>"
                            . "<td><a href='' class='btn btn-success btn-lg' data-toggle='modal' data-target='#ficha" . $row["pop_id"] . "'> <img src='../imagens/ficha.png' width='75%'></a></td></tr>";

                            echo "<div id='ficha" . $row["pop_id"] . "' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $row["pop_nome"] . "</h4>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Informações Da Pessoa</p>
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
                       
                    } else if (isset($_POST['campo_pesquisa_pop'])) {
                        echo "Nenhum dado encontrado";
                    }
                }
                ?>
            </div>
        </div>
    </div>

</section>