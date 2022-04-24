<?php //
include "../../Controller/VerificaLogin.php";
if ($_SESSION['tipo'] != 2) { ?>
<script type='text/javascript'>
    alert('Permissão negada');
    location.href = '../';
</script>

<?php } ?>

<?php 

function _log($m) { echo "<script>console.log(".json_encode($m).")</script>"; }

// _log($_POST);
// _log($_GET);
// exit;
//Agente
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {
        case "salvarAgente":
            require "../../Controller/CAgente.php";
            $CAgente = new CAgente();
            $CAgente->SalvarAgente($_SESSION['psf_id'], $_POST['age_login'], $_POST['age_senha'] ,$_POST['age_nome'],$_POST['estados'], $_POST['cidades']);
            $nome = $_POST['age_nome'];
            echo "Agente de Saúde $nome salvo com sucesso!";         
            break;  
        
         case "editarAgente":
            require "../../Controller/CAgente.php";
            $CAgente = new CAgente();
            $CAgente->EditarAgente($_POST['age_id'], $_POST['age_nome'], $_POST['age_login'], $_POST['age_senha'], $_POST['eEstado'], $_POST['cidades']);
            $nome = $_POST['age_nome'];             
            echo "Agente de Saúde $nome Editado com sucesso!";
            exit;
            break;
    }
  

}
//População

require "../../Controller/CPopulacao.php";
$CPopulacao = new CPopulacao();
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {

         case "CadastrarVac":
            require "../../Controller/CVacina.php";
            $CVacina = new CVacina();
            if(isset($_POST['vac_nome'],$_POST['vac_min'],$_POST['vac_max'])){
                if($_POST['Min'] == 0){
                    $_POST['vac_min'] = $_POST['vac_min']*0;
                }
                if($_POST['Min'] == 1){
                    $_POST['vac_min'] = $_POST['vac_min'];       
                }
                if($_POST['Min'] == 2){
                    $_POST['vac_min'] = $_POST['vac_min'] * 12;                    
                }
                if($_POST['Max'] == 3){
                    $_POST['vac_max'] = $_POST['vac_max']*0;                   
                }
                if($_POST['Max'] == 4){
                    $_POST['vac_max'] = $_POST['vac_max'];
                }
                if($_POST['Max'] == 5){
                    $_POST['vac_max'] = $_POST['vac_max']*12;                   
                }
             
                $CVacina->CadastrarVac($_POST['vac_nome'],$_POST['vac_min'],$_POST['vac_max']);
            }
            $nome = $_POST['vac_nome'];
            echo "Vacina $nome salva com sucesso!";exit;
            break;       
        case "EditarVac":
            require "../../Controller/CVacina.php";
            $CVacina = new CVacina();
            $CVacina->EditarVac($_POST['vac_id'], $_POST['vac_nome'],$_POST['vac_min'],$_POST['vac_max']);
            $nome = $_POST['vac_nome'];
            echo "Vacina $nome editado com sucesso!";
            break;
            case "CadastrarPopulacao":
//            require "../../Controller/CPopulacao.php";
//            $CPopulacao = new CPopulacao();
            $CPopulacao->CadastrarPopulacao(
                    $_POST['pop_nome'],
                    $_POST['pop_data_nascimento'],
                    $_POST['pop_pai'],
                    $_POST['pop_mae'],
                    $_POST['pop_logradouro'],
                    $_POST['pop_nome_log'], 
                    $_POST['pop_num'], 
                    $_POST['pop_bairro'], 
                    $_POST['estados'], 
                    $_POST['cidades'],
                    $_POST['pop_login'],
                    $_POST['pop_senha'],
                    $_SESSION['psf_id']);
           
           
           echo "<script type='text/javascript'>
                    alert('Pessoa $nome salva com sucesso!');
                        location.href='index.php#Populacao';
                </script>";

             
 break;

    case "EditarPopulacao":
            //var_dump($_POST); exit;
            $CPopulacao->EditarPopulacao($_POST['pop_id'], $_POST['pop_nome'], $_POST['pop_data_nascimento'], $_POST['pop_pai'], $_POST['pop_mae'], $_POST['pop_logradouro'], $_POST['pop_noeme_log'], $_POST['pop_num'], $_POST['pop_bairro'], $_POST['estados'], $_POST['cidades'],$_POST['pop_login'],$_POST['pop_senha']);
            $nome = $_POST['pop_nome'];
            echo "Pessoao $nome editado com sucesso!";
            break;

    case "SalvarVacinacao":
                  require_once "../../Controller/CVacinacao.php";
                $CVacinacao = new CVacinacao();
                $fk_pop_id = $_POST['fk_pop_id'];              
                $CVacinacao->CadastrarVacinacao($_POST['vac_id'],$_POST['fk_pop_id'], $_POST['inj_data']); 
                  echo "<script type='text/javascript'>
                        location.href='index.php#vacina';
                </script>";
                exit;
            break;
    }
}
  
require "../../Controller/CRotas.php";
$CRotas = new CRotas();
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {
            case "SalvarRotas":
             if(isset($_POST['rot_fk_age'],$_POST['campo_desI'],$_POST['campo_desF'])){
                $CRotas->SalvarRotas($_POST['rot_fk_age'], $_POST['campo_desI'], $_POST['campo_desF']);
             }
            
                break;
                
   }
   } 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
        <script language="JavaScript" type="text/javascript"  charset="UTF-8">
            var estado = new Array();
            var cidades = new Array();

            cidades[0] = '';
            cidades[1] = '';
            cidades[2] = '';
            cidades[3] = '';
            cidades[4] = '';
            cidades[5] = '';
            cidades[6] = '';
            cidades[7] = '';
            cidades[8] = '';
            cidades[9] = '';
            cidades[10] = '';
            cidades[11] = '';
            cidades[12] = '';
            cidades[13] = '';
            cidades[14] = '';
            cidades[15] = '';
            cidades[16] = '';
            cidades[17] = '';
            cidades[18] = '';
            cidades[19] = '';
            cidades[20] = '';
            cidades[21] = '';
            cidades[22] = '';
            cidades[23] = '';
            cidades[24] = '';
            cidades[25] = '';
            cidades[26] = '';
            cidades[27] = '';

            for (a = 0; a < 28; a++) {
                cidades[a] = new Array();
            }
        </script>
        <script src="../js/lista_cidades.js" language="JavaScript" type="text/javascript" charset="UTF-8"></script>
        <script language="JavaScript" type="text/javascript" charset="UTF-8">
                    function limpaOption(campo) {
                        while (campo.options.length > 1) {
                            campo.remove(1);
                        }
                    }
                    function monta_estados() {
                        limpaOption(document.formAge.estados, 1);
                        limpaOption(document.form5.estados, 1);
                        document.formAge.estados.options[0] = new Option("Selecione um estado", -1);
                        document.form5.estados.options[0] = new Option("Selecione um estado", -1);
                        for (i = 1; i <= estado.length; i++) {
                             document.formAge.estados.options[i] = new Option(estado[ (i - 1) ], (i - 1));
                             document.form5.estados.options[i] = new Option(estado[ (i - 1) ], (i - 1));
                        }
                    }
                    function monta_select(id) {
                        if (id !== -1) {
                            if (id === '') {
                                document.formAge.cidades.options[0] = new Option("Selecione uma cidade", -1);
                                document.form5.cidades.options[0] = new Option("Selecione uma cidade", -1);
                            } else {
                                limpaOption(document.formAge.cidades, 2);
                                limpaOption(document.form5.cidades, 2);
                                document.formAge.cidades.options[0] = new Option("Selecione uma cidade", -1);
                                document.form5.cidades.options[0] = new Option("Selecione uma cidade", -1);
                                for (i = 1; i <= cidades[ id ].length; i++) {
                                    document.formAge.cidades.options[ i ] = new Option(cidades[ id ][ (i - 1) ], cidades[ id ][ (i - 1) ]);
                                    document.form5.cidades.options[ i ] = new Option(cidades[ id ][ (i - 1) ], cidades[ id ][ (i - 1) ]);
                                }
                            }
                        }
                    }
        </script>

    </head>
    <body class="text-center" onload="monta_estados();
            monta_select('');">
        <!-- Navbar -->
        <?php
        include "navBar.php";
        include "principal.php";
        include "Agente.php";
        include "CadRotas.php";
        include "CadPop.php";
        include "CadVacina.php";
        include "CadVacinacao.php";
        include "footer.php";
        include "modais.php";
        ?>
        <script src="../java/jquery-3.3.1.min.js"></script>
        <script src="../java/popper.js"></script>
        <script  src="../java/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.js"></script>

       

        <!-- inicio script agente -->
        <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dadosAGE) {
                    $.ajax(dadosAGE).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=formAge]').submit(function(e) {
                    e.preventDefault();
                    
                    let estadoNome = $('form[name=formAge] select[name=estados] option:selected').text();

                    let dadosAGE = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize()+'&eEstado='+estadoNome,
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modalag').modal('show');
                        }
                    };
                    ajax(dadosAGE);
                    // resetFormulario('form[name=formAge]');
               });
            });
        </script>
        <!-- fim script agente-->

               <div class="modal fade" id="modalag">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agente salvo com Sucesso!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Aperte no botão OK, para concluir</p>
                    </div>
    
                    <div class="modal-footer">
                        <!-- <a href="index.php"><button type="button" class="btn btn-success">OK</button></a> -->
                        <button data-dismiss="modal" class="btn btn-primary">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim modal agente -->

        <!-- inicio script pop-->
                <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dadosPOP) {
                    $.ajax(dadosPOP).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=form5]').submit(function(e) {
                    e.preventDefault();

                    let dadosPOP = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize(),
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modalpop').modal('show');
                        }
                    };
                    ajax(dadosPOP);
                    //resetFormulario('form[name=form5]');
               });
            });
        </script>
        <!-- fim script pop-->

        <!-- inicio modal pop -->
               <div class="modal fade" id="modalpop">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pessoa salva com Sucesso!</h4>
                    </div>
                    <div class="modal-body">
                         <p>Aperte no botão OK, para concluir</p>
                    </div>
    
                    <div class="modal-footer">
                        <!-- <a href="index.php"><button type="button" class="btn btn-success">OK</button></a> -->
                        <button data-dismiss="modal" class="btn btn-default">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim modal pop -->

                <!-- inicio script Rotas -->
        <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dadosRotas) {
                    $.ajax(dadosRotas).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=formRotas]').submit(function(e) {
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

                    let dadosRotas = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize(),
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modalrota').modal('show');
                        }
                    };
                    ajax(dadosRotas);
                   // resetFormulario('form[name=formRotas]');
               });
            });
        </script>
        <!-- fim script Rotas-->

               <div class="modal fade" id="modalrota">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Rota salvo com Sucesso!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Aperte no botão OK, para concluir</p>
                    </div>
    
                    <div class="modal-footer">
                        <!-- <a href="#inicio.php"><button type="button" class="btn btn-success">OK</button></a> -->
                        <button data-dismiss="modal" class="btn btn-primary">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim modal Rotas -->

        <!-- script do modal vacina -->
        <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dadosVac) {
                    $.ajax(dadosVac).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=formvac]').submit(function(e) {
                    e.preventDefault();
                    // dados = {
                    //     url: 'url',
                    //     dataType: 'post',
                    //     data: $(this).serialize(),
                    //     success: function(data) {

                    //     }
                    // };
                    // ajax(dados);
                   //resetFormulario('form[name=formvac]');

                    let dadosVac = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize(),
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modalVacina').modal('show');
                        }
                    };
                    ajax(dadosVac);
                   resetFormulario('form[name=formvac]');
               });
            });
        </script>
        <!-- fim script Vacina-->
        <div class="modal fade" id="modalVacina">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Vacina salva com Sucesso!</h4>
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

        
        <!-- script do modal vacinacao -->
        <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dadosVac1) {
                    $.ajax(dadosVac1).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=formvacinacao]').submit(function(e) {
                    e.preventDefault();
                    // dados = {
                    //     url: 'url',
                    //     dataType: 'post',
                    //     data: $(this).serialize(),
                    //     success: function(data) {

                    //     }
                    // };
                    // ajax(dados);
                   //resetFormulario('form[name=formvac]');

                    let dadosVac1 = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize(),
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modalVacinacao').modal('show');
                        }
                    };
                    ajax(dadosVac1);
                   resetFormulario('form[name=formvacinacao]');
               });
            });
        </script>
        <!-- fim script Vacinacao-->
        <div class="modal fade" id="modalVacinacao">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Vacinação salva com Sucesso!</h4>
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
        <!-- fim modal vacinacao -->

    </body>

</html>