<?php
include "../../Controller/CVacinacao.php";
$CVacinacao = new CVacinacao();
$pes_id = 1;
?>
<div id="Cartao" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">                
                <img src="../imagens/cartao.png" width="95%">    
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Nome Completo</th>
                            <th scope="col">Data de Nascimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>

                    </tbody>
                </table>                  
                <?php
                if (isset($pes_id)) {
                    ?>
                    <table class="table table-hover" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Vacina</th>
                                <th scope="col">Período</th>
                                <th scope="col">Vacinação</th>
                                <th scope="col">Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $CVacinacao->pesquisarVacinadao($pes_id);
                            $cont = 1;
                            while ($row = $result->fetch_assoc()) {
                                $inj_id = $row['age_id'];
                                $inj_nome = $row['age_nome'];
                                $inj_DataVenc = $row['age_login'];
                                $inj_DataTomada = $row['age_senha'];
                                echo "<tr>
                                    <th scope='row'>$cont</th>
                                    <td>$inj_nome</td>
                                    <td>$inj_DataVenc</td>
                                    <td>$inj_DataTomada</td>
                                    <td> <img src='../imagens/verificado.png' height='50%' ></td>
                                    </tr> ";
                                $cont++;
                            }
                        
                        ?>                             

                    </tbody>
                </table>  
<?php
                }
?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Alterar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hepatite B – a depender da situação vacinal</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h1>Por que tomar?</h1>
                A vacina é importante por prevenir a hepatite B, uma infecção do fígado.
                <hr>
                <h1>Quando tomar?</h1>
                Indicada em qualquer faixa etária, sendo esta aplicação feita em um esquema de três doses, caso a vacina não tenha sido aplicada ao nascer: 1° dose sem data definida, 2° dose um mês após a primeira e 3° dose cinco meses após a segunda.
                <hr>
                <h1>Quem deve tomar?</h1>
                A vacina pode ser administrada em qualquer idade e o esquema ainda pode ser feito caso a aplicação após o nascimento não aconteça, Sendo assim, crianças, adolescentes, adultos, idosos e gestantes podem (e devem!) tomar a vacina.
                <hr>
                <h1>Quem não deve tomar?</h1>
                É contraindicada para aqueles que apresentaram anafilaxia com componentes da vacina, e também para aqueles que apresentaram queda no nível das plaquetas após a vacinação.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
