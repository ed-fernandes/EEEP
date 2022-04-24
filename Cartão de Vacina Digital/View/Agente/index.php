<?php
include "../../Controller/VerificaLogin.php";
if ($_SESSION['tipo'] != 1) { ?>
<script type='text/javascript'>
    alert('Permissão negada');
    location.href = '../';
</script>

                <?php

}?>
                <?php
  
                function _log($m) { echo "<script>console.log(".json_encode($m).")</script>"; }
  if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {
        case "salvarVisitas":
            require_once  "../../Controller/CVisitas.php";
$CVisitas = new CVisitas();
        if(isset($_SESSION['age_id'],$_POST['pop_id'],$_POST['vis_data'])){    
            $CVisitas->SalvarVisita($_SESSION['age_id'],$_POST['pop_id'],$_POST['vis_data']);
        }
            //$data = $_POST['campo_data_visita'];
           
break;  



        
       /*  case "editarAgente":
            require "../../Controller/CAgente.php";
            $CAgente = new CAgente();
            $CAgente->EditarAgente($_POST['age_id'], $_POST['age_nome'], $_POST['age_login'], $_POST['age_senha'], $_POST['eEstado'], $_POST['cidades']);
            $nome = $_POST['age_nome'];             
            echo "Agente de Saúde $nome Editado com sucesso!";
            exit;
            break;*/
    }
  
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cartão de Vacinal Digital</title>
        <meta name="description" content="Sistema para Cartão de Vacina Digital da população canindéense">
        <meta name="keywords" content="Cartão Vacina Escola">
        <link rel="stylesheet" href="../vc.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <script src="../js/navbar-ontop.js"></script>
        <script src="../js/animate-in.js"></script>
    </head>
    <body class="text-center">
         
        <?php
       include "navBar.php";
        include "principal.php";
        include "pesquisar.php";
        include "Visitas.php";
        include "footer.php";
        include "modais.php";

        
        
        ?>
       <script src="../java/jquery-3.3.1.min.js"></script>
        <script src="../java/popper.js"></script>
        <script  src="../java/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.js"></script>
        
         <!-- script do modal vacina -->
        <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dadosVN) {
                    $.ajax(dadosVN).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=formVisita]').submit(function(e) {
                    e.preventDefault();
                    // dados = {
                    //     url: 'url',
                    //     dataType: 'post',
                    //     data: $(this).serialize(),
                    //     success: function(data) {

                    //     }
                    // };
                    // ajax(dados);
                    // resetFormulario('form[name=form1]');

                    let dadosVN = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize(),
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modalvisita').modal('show');
                        }
                    };
                    ajax(dadosVN);
                    //resetFormulario('form[name=formvac]');
               });
            });
        </script>
        <!-- fim script Vacina-->
        <div class="modal fade" id="modalvisita">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Visita salva com Sucesso!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Aperte no botão OK, para concluir</p>
                    </div>
    
                    <div class="modal-footer">
                        <!-- <a href="index.php"><button type="button" class="btn btn-success">OK</button></a> -->
                        <button data-dismiss="modal" class="btn btn-success">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim modal vacina -->
    </body>
</html>