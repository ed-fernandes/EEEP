<?php
require_once '../../Controller/CVacinacao.php';
require_once '../../Controller/CPopulacao.php';
require_once '../../Controller/CVacina.php';
$CVacinacao = new CVacinacao();
$CPopulacao = new CPopulacao();
$CVacina = new CVacina();
$pop_id = $_SESSION['pop_id'];
?>
<div class="modal fade " id="sitemodal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">                
                <img src="../imagens/cartao3.png" width="100%">   
               <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
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
                            <?php
                            $result = $CVacinacao->pesquisarVacinacao($pop_id);
                            $idade = ($CPopulacao->pesquisarPOPIdade($pop_id));
                            $vac_dip = $CVacina->vacinasDisponiveis();
                            
                            
                            while ($qualquer = $idade->fetch_assoc()) {
                               $id_meses = $qualquer['meses'];
                            }
                            while ($row = $result->fetch_assoc()) {
                                
                                if ($pop_id == $row["pop_id"]) {
                                echo "<td>" . $row['pop_nome'] . "</td>
                                <td>" . date('d/m/Y',strtotime($row['pop_data_nascimento'])) . "</td>";
                                break;
    }                        
}
                          /*  $result = $CVacinacao->pesquisarVacinacao($pop_id); */
                        ?>
                        </tr>

                    </tbody>
                </table>                  
                <?php
                if (isset($pop_id)) {
                    ?>

              
                    <table class="table table-hover" width="40%">
                        <thead>
                            <tr>
                                <th scope="col">Vacina</th>
                                <th scope="col">Data tomada</th>
                                <th scope="col">Idade mín.</th>
                                <th scope="col">Idade máx.</th>
                                <th scope="col">Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $CVacinacao->pesquisarVacinacao($pop_id);
                            while($row = $result->fetch_assoc()){
                                $inj_id = $row['inj_id'];
                                $inj_nome = $row['pop_nome'];
                                $inj_idademeses = $row['pop_data_nascimento']; 
                                
                                
                                
                            }
                            $result2 = $CVacina->pesquisarTodas();
                            $vac_list = $result2->fetch_assoc();                      
                            while ($row = $vac_dip->fetch_assoc()) {
                                $inj_vac = $row['vac_nome'];
                                $inj_min = $row['vac_min'];
                                $inj_max = $row['vac_max']; 
                                $inj_tomada = $row['data'];
                  
                               
                                $img1 = "<img src='../imagens/verificado.png' width='50%'>";
                                $img2 = "<img src='../imagens/qseverificado.png' width='50%'>"; 
                                $img3 = "<img src='../imagens/unverificado.png' width='50%'>";  
                                if ($inj_tomada!=null){
                                    $img = $img1;
                                }else{
                                    if ($id_meses>$inj_max) {
                                        $img=$img3;
                                    }else{
                                        $img=$img2;
                                    }
                                }
                                if ($inj_tomada == null) {
                                  $inj_tomada = 'Não tomada';
                               }
                               if(($inj_min != "Qualquer")){
                               $anos1= ($inj_min)-($inj_min % 12);
                               $meses1=($inj_min % 12);
                               if ($inj_min == 0){
                                    $inj_min = 'Ao nascer';
                                    } else if($inj_min >= 12){
                                        if(($inj_min % 12) == 0){
                                          $inj_min = ($inj_min/12).' Ano(s)';
                                        }else{
                                          $inj_min = ($anos1/12).' Ano(s) e '.$meses1.' Mês(s)';
                                        }
                                    } else{
                                    $inj_min = ($inj_min). ' Mês(s)';
                                } 
                               }
                               if ($inj_max !="Qualquer") {
                                   $anos2= ($inj_max)-($inj_max%12);
                                   $meses2=($inj_max % 12);
                                      if ($inj_max == 0){
                                         $inj_max = 'Ao nascer';
                                        } else if($inj_max >= 12){
                                          if(($inj_max % 12) == 0){
                                          $inj_max = ($inj_max/12).' Ano(s)';
                                        }else{
                                          $inj_max = ($anos2/12).' Ano(s) e '.$meses2.' Mês(s)';
                                        }
                                    } else{
                                    $inj_max = ($inj_max). ' Mês(s)';
                                }

}
                                
                               

                               echo "<tr>

                                    <td>$inj_vac</td>
                                    <td>$inj_tomada</td>
                                    <td>$inj_min</td>
                                    <td>$inj_max</td>
                                    <td>$img
                                    </td>
                                    </tr> ";
                        //       }     
                           $inj_tomada = null;
                               }
                        
                        ?>                             

                    </tbody>
                </table>  
<?php
                }
?>
                <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="sitemodal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja Realmente sair ?</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                          <a class="btn btn-danger" href="../../Controller/sair.php" role="button">Sim</a>
                            <a class="btn btn-success" href="" data-dismiss="modal" role="button">Não</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>