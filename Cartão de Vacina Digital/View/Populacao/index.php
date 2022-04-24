<?php
include "../../Controller/VerificaLogin.php";
if ($_SESSION['tipo'] != 3) {
        ?>
                <script type='text/javascript'>
                    alert('Permissão negada');
                    
                </script>

                <?php

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
        <!-- Navbar -->
        <?php
       
        include "navBar.php";  
        include "principal.php";
        include "corpo1.php";
        include "../Publico/calendario.php";
        include "informacoes.php";
        include "../Publico/apoiadores.php";
        include "footer.php";
        include "modais.php";
        include "../Publico/modais.php";         
           ?>
        <script src="../java/jquery-3.3.1.min.js"></script>
        <script src="../java/popper.js"></script>
        <script  src="../java/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.js"></script>
    </body>

</html>