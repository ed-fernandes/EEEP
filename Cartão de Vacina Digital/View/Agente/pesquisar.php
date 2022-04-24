<div class="py-5 section-parallax" style="background-image: url(&quot;../imagens/venue.jpg&quot;);" id="pesquisar">
    <div class="my-5 bg-light p-4 container animate-in-left">
        <div class="row mx-auto">
            <div class="col-md-12">
                <h1 class="mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start">
                    Verificar Dados </h1>
                <form method="POST" action="#pesquisar">
                    <input type="text" name="campo_pesquisa" placeholder="Digite aqui" required="" class="form-control my-2">                         
                    <div class="funkyradio">
                        <div class="funkyradio-success">
                            <input type="radio" name="tipo" id="radio1" value="1" checked/>
                            <label for="radio1">Nome completo</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="radio" name="tipo" id="radio2" value="2" />
                            <label for="radio2">Rua</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="radio" name="tipo" id="radio3" value="3" />
                            <label for="radio3">Bairro</label>
                        </div>
                    </div> <br>                    
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                </form>
                <br/>
                <?php
                if (isset($_POST['campo_pesquisa'])) {
                    include "../../Controller/CPopulacao.php";
                    $CPopulacao = new CPopulacao();
                    $result = $CPopulacao->pesquisar($_POST['campo_pesquisa'], $_POST['tipo']);
             
                    if (mysqli_num_rows ($result) > 0) {
                       echo "Foi(foram) encontrado(s) ". mysqli_num_rows ($result). " dado(s)";
                        echo "<h2>Dados encontrados </h2>
                    <table class='table table-striped'>
                        <tr>
                            <th width='70%'>Dados Pessoais</th>   
                            <th>Realizar visita</th>
                            <th>Visualizar ficha</th>
                        </tr> ";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr> <td><b>" . $row["pop_nome"] . "</b> <br>"
                        . $row["pop_logradouro"]. " ". $row["pop_nome_log"].", ". $row["pop_num"]." - ". $row["pop_bairro"]." - ". $row["pop_cidade"]." - ". $row["pop_estado"]
                        . "<br> " . $row["pop_pai"] 
                        . "<br> " . $row["pop_mae"]. "</td>"
                        . "<td><a href=''class='btn btn-warning btn-lg'> <img src='../imagens/verificado.png' width='75%'>  </a> </td>"
                        . "<td><a href=''class='btn btn-success btn-lg' data-toggle='modal' data-target='#ficha" . $row["pop_id"] . "'> <img src='../imagens/ficha.png' width='75%'></a></td></tr>";

                        echo "<div id='ficha" . $row["pop_id"] . "' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $row["pop_nome"] . "</h4>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Informações da Vacina</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Gerar PDF</button>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                    echo "</table>";
                }} else {
                    echo "Nenhum dado encontrado";
                }
                ?>
            </div>
        </div>
    </div>
</div>