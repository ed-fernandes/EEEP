<div class="py-5 header-site3" id="pesquisar">
 <div class="my-5 bg-light p-4 container animate-in-left">
        <div class="row mx-auto">
            <div class="col-md-12">
                <h1 class="mb-3 d-flex flex-row-reverse justify-content-center align-items-start align-self-start">
                    Verificar Dados </h1>
                <form method="POST" action="#pesquisar">
                    <input type="text" name="campo_pesquisa_age" placeholder="Digite aqui" class="form-control my-2">                         
                    <div class="funkyradio">
                        <div class="funkyradio-success">
                            <input type="radio" name="tipo" id="radio1" value="1" checked/>
                            <label for="radio1">Nome completo</label>
                        </div>
                    </div> <br>                    
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                </form>
                <br/>
                <?php
                if (isset($_POST['campo_pesquisa_age'])) {
                    include "../../Controller/CAgente.php";
                    $CAgente = new CAgente();
                    $result = $CAgente->pesquisarAgentePsf($_POST['campo_pesquisa_age'], $_POST['tipo']);
                    
                    if (mysqli_num_rows ($result) > 0) {
                            echo "Foi(foram) encontrado(s) ". mysqli_num_rows ($result). " dado(s)";
                            echo "<h2>Dados encontrados </h2>
                        <table class='table table-striped'>
                            <tr>
                                <th width='70%'>Dados dos Agentes</th>
                            </tr> ";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr> <td><b>" . $row["age_login"] . "</b> <br>"
                            . $row["age_nome"]. "<br>". $row["age_estado"]."-". $row["age_cidade"]."-".
                            $row["fk_rot_id"];
                        }
                        echo "</table>";
                    } else {
                        echo "Nenhum dado encontrado";
                    }
                        
                }
                ?>
            </div>
        </div>
    </div>
</div>