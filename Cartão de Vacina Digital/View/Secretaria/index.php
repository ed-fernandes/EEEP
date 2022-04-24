<?php
include "../../Controller/VerificaLogin.php";
if ($_SESSION['tipo'] != 4) {
        ?>
                <script type='text/javascript'>
                 
                </script>

                <?php

}



if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {
           case "SalvarPsf":
            require "../../Controller/CPsf.php";
            $CPsf = new CPsf();
            $CPsf->SalvarPsf($_POST['psf_login'], $_POST['psf_senha']);
            $nome = $_POST['psf_login'];
            echo "Psf $nome salvo com sucesso!";exit;
            break;        
        case "EditarPsf":
           require "../../Controller/CPsf.php";      
          $CPsf = new CPsf();
            $CPsf->EditarPsf($_POST['psf_id'], $_POST['psf_login'], $_POST['psf_senha']);
            $nome = $_POST['psf_login'];
            echo "<script type='text/javascript'>
                    alert('Agente de Saúde $nome editado com sucesso!');
                         location.href='index.php#Psf';
                </script>";
            break;
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
        <script language="JavaScript" type="text/javascript">
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
        <script src="../js/lista_cidades.js" language="JavaScript" type="text/javascript"></script>
        <script language="JavaScript" type="text/javascript">
                    function limpaOption(campo) {
                        while (campo.options.length > 1) {
                            campo.remove(1);
                        }
                    }
                    function monta_estados() {
                        limpaOption(document.form.estados, 1);
                        document.form.estados.options[0] = new Option("Selecione um estado", -1);
                        for (i = 1; i <= estado.length; i++) {
                            document.form.estados.options[ i ] = new Option(estado[ (i - 1) ], (i - 1));
                        }
                    }
                    function monta_select(id) {
                        if (id != -1) {
                            if (id == '') {
                                document.form.cidades.options[0] = new Option("Selecione uma cidade", -1);
                            } else {
                                limpaOption(document.form.cidades, 2);
                                document.form.cidades.options[0] = new Option("Selecione uma cidade", -1);
                                for (i = 1; i <= cidades[ id ].length; i++) {
                                    document.form.cidades.options[ i ] = new Option(cidades[ id ][ (i - 1) ], cidades[ id ][ (i - 1) ]);
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
        include "PSF.php";
        include "footer.php";
        include "modais.php";
        ?>
        <script src="../java/jquery-3.3.1.min.js"></script>
        <script src="../java/popper.js"></script>
        <script  src="../java/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.js"></script>
        <a href="../../../vacina/CartaoDigital11/View/Secretaria/index.php"></a>
        <!-- script do modal vacina -->
        <script type="text/javascript">
            $(document).ready(function() {

                function ajax(dados) {
                    $.ajax(dados).fail(function(a, b, e){alert(e);});
                }
                function resetFormulario(selector) {
                    document.querySelector(selector).reset();
                }

               $('form[name=form2]').submit(function(e) {
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

                    let dados = {
                        url: $(this).prop('action'),
                        dataType: 'html',
                        method: 'POST',
                        data: $(this).serialize(),
                        beforeSend: function() {

                        },
                        success: function(data) {
                            $('#modal').modal('show');
                        }
                    };
                    ajax(dados);
                    resetFormulario('form[name=form2]');
               });
            });
        </script>
        <!-- fim script Vacina-->
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Posto salvo com Sucesso!</h4>
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