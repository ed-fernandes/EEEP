<?php


// Ações do Agente
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {
        case "salvarAgente":
            require "../../Controller/CAgente.php";
            $CAgente = new CAgente();
            $CAgente->SalvarAgente($_POST['age_nome'], $_POST['age_login'], $_POST['age_senha'], $_POST['estados'], $_POST['cidades']);
            $nome = $_POST['age_nome'];
            echo "<script type='text/javascript'>
                    alert('Agente de Saúde $nome salvo com sucesso!');
                         location.href='index.php#Agente';
                </script>";
            break;        
        case "editarAgente":
            require "../../Controller/CAgente.php";
            $CAgente = new CAgente();
            $CAgente->EditarAgente($_POST['age_id'], $_POST['age_nome'], $_POST['age_login'], $_POST['age_senha'], $_POST['estados'], $_POST['cidades']);
            $nome = $_POST['age_nome'];
            echo "<script type='text/javascript'>
                    alert('Agente de Saúde $nome editado com sucesso!');
                         location.href='index.php#Agente';
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
        <link rel="stylesheet" href="../aquamarine.css">
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
       
        include "../Publico/principal.php";
        include "PSF.php";
        include "Agente.php";
        include "../Publico/footer.php";
       include "modais.php";
        ?>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../js/smooth-scroll.js"></script>
    </body>

</html>